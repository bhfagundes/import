<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Obrigacao;
use Faker\Generator as Faker;

$factory->define(Obrigacao::class, function (Faker $faker) {

    return [
        'usuario' => $faker->randomDigitNotNull,
        'id_origem_obrigacao' => $faker->randomDigitNotNull,
        'id_tipo_obrigacao' => $faker->randomDigitNotNull,
        'id_ciclo_obrigacao' => $faker->randomDigitNotNull,
        'id_documento_obrigacao' => $faker->randomDigitNotNull,
        'especificidade' => $faker->word,
        'link_obrigacao' => $faker->word,
        'data_publicacao' => $faker->word,
        'data_vigencia_inicio' => $faker->word,
        'data_vigencia_fim' => $faker->word,
        'exibe_calendario' => $faker->word,
        'id_ato' => $faker->randomDigitNotNull,
        'cod_aux_ato' => $faker->randomDigitNotNull,
        'id_cod_receita' => $faker->randomDigitNotNull,
        'idx_ordem' => $faker->randomDigitNotNull,
        'codigo_receita' => $faker->randomDigitNotNull,
        'id_estado' => $faker->randomDigitNotNull,
        'id_cidade' => $faker->randomDigitNotNull,
        'nome_obrigacao' => $faker->word,
        'id_periodo_obrigacao' => $faker->randomDigitNotNull,
        'data_vencimento' => $faker->word,
        'qtde_dias_vencimento' => $faker->randomDigitNotNull,
        'mes_vencimento' => $faker->randomDigitNotNull,
        'regra_dia_nao_util' => $faker->randomDigitNotNull,
        'tipo_dia' => $faker->randomDigitNotNull,
        'dia_vencimento' => $faker->randomDigitNotNull,
        'ult_dia_mes' => $faker->randomDigitNotNull
    ];
});
