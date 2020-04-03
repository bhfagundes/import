<?php

namespace App\Imports;

use App\Models\Obrigacao;
use App\Models\DataAtividade;
use App\Models\DataObrigacao;
use App\Models\CodigoReceita;
use App\Models\Usuarios;
use App\Models\TipoAtividade;
use App\Models\Atividade;
use App\Models\TipoObrigacao;
use App\Models\Filial;
use App\Models\DataAtividadeFilial;
use Maatwebsite\Excel\Concerns\ToModel;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\WithChunkReading;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class AtividadesImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
      
        $arrayCreate = [];
        $idTipo = $row['id_obrigacao'];
        $obrigacoes = Obrigacao::where('id_tipo_obrigacao',trim($idTipo))->get();
        
        if(!is_null($row['cod_receita']))
        {
            $codReceita = CodigoReceita::where('codigo_receita',trim($row['cod_receita']))->first(['id_codigo_receita']);
            $arrayCreate['id_codigo_receita'] = $codReceita->id_codigo_receita;
        }
        else
        {
            $arrayCreate['id_codigo_receita']=0;
        }
        if($row['atividade']=='Cruzamento')
        {
            $row['atividade']='Auditoria/Cruzamento';
        }
        $tipoAtividade = TipoAtividade::where('descricao',trim($row['atividade']))->first(['id_tipo_atividade']);
        
       
        $arrayCreate['tipo_dia']=$row['tipo_de_dia'];
        $arrayCreate['regra_dia_util']=$row['regra_do_dia_util'];
        $arrayCreate['mandatoria'] = $row['mandatoria'];
        $arrayCreate['conclusao_automatica'] = $row['conclusao_automatica'];
        $arrayCreate['quantidade_dias']=$row['data_sem_contagem_de_dias'];
        if(!$tipoAtividade)
        {
            dd($row['atividade']);
        }
        $arrayCreate['id_tipo_atividade']=$tipoAtividade->id_tipo_atividade;
        
        if($row['responsavel'] == 'duilio.oliveira@energisa.om.br')
        {
            $row['responsavel']='duilio.oliveira@energisa.com.br';
        }
        if($row['responsavel'] == 'micheli.bernardes@energisa.com.br')
        {
            $row['responsavel']='micheli.bernardes@energisa.com';
        }
        
        $usuario = Usuarios::where('email',trim($row['responsavel']))->first(['id']);
  
        if(!$usuario)
        {
            dd($row['responsavel']);
        }
        $arrayCreate['usuario_responsavel']=$usuario->id;
        //$arrayCreate['usuario_responsavel']=55;
        $row['estabelecimento'] = \str_replace('.','',$row['estabelecimento']);
        $row['estabelecimento'] = \str_replace('-','',$row['estabelecimento']);
        $row['estabelecimento'] = \str_replace('/','',$row['estabelecimento']);
        $filial = Filial::where('cnpj',trim($row['estabelecimento']))->first(['id']); 
        if(!$filial)
        {
            dd($row['estabelecimento']);
        }       
        if($arrayCreate['mandatoria'] ==2)
        {
            unset($arrayCreate['mandatoria']);
        }
        if($arrayCreate['conclusao_automatica'])
        {
            unset($arrayCreate['mandatoria']);
        }
        
        $arrayCreate['data_com_contagem'] = $row['data_com_contagem_de_dias'];
        for($i =0 ; $i<sizeof($obrigacoes);$i++)
        {   $arrayCreate['id_obrigacao'] = $obrigacoes[$i]->id_obrigacao;
            if(!is_null($row['data_com_contagem_de_dias']))
            {
                $qtd = explode('-',$row['data_com_contagem_de_dias']);
                $arrayCreate['quantidade_dias']=$qtd[1];
                $atividade = Atividade::create($arrayCreate);
                $datas = DataObrigacao::where('id_obrigacao',$arrayCreate['id_obrigacao'])->get();
                for($j=0; $j<sizeof($datas);$j++)
                {
                    $result = DB::connection("platform")
                                ->select('call insert_data_atividade_carga(?, ?,?,?,?,?,?,?)',
                                    [$atividade->id,
                                    Carbon::parse($datas[$j]->data_vencimento)
                                    ->format('Y-m-d'),
                                    $arrayCreate['tipo_dia'],
                                    $arrayCreate['regra_dia_util'] ,
                                    $arrayCreate['quantidade_dias'],
                                    $datas[$j]->id_data_obrigacao,
                                    $obrigacoes[$i]->id_ciclo_obrigacao,
                                    $arrayCreate['usuario_responsavel']]);

                }
                
                // aqui gera
            }
            else
            {
                
                $arrayCreate['quantidade_dias']=0;
                $atividade = Atividade::create($arrayCreate);
                $arrayCreate['data_com_contagem'] = $row['data_sem_contagem_de_dias'];
                
                $result = DB::connection("platform")
                                ->select('call gerarDataFixa(?, ?,?,?)',
                                    [$arrayCreate['data_com_contagem'],
                                    $arrayCreate['regra_dia_util'],
                                    $arrayCreate['usuario_responsavel'],
                                    $atividade->id 
                                    ]);

            }
        
            $datasAtividade = DataAtividade::where('id_atividade',$atividade->id)->get(['id_data_atividade']);
            for($k=0;$k<sizeof($datasAtividade);$k++)
            {
                DataAtividadeFilial::create(['id_data_atividade'=>$datasAtividade[$k]->id_data_atividade,
                    'id_filial' => $filial->id 
                ]);
            }
        }
      
        
        
    }
    public function headingRow(): int
    {
        return 1;
    }
   /* public function chunkSize(): int
    //{
        return 1000;
    }*/
}
