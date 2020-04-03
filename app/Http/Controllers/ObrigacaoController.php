<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateObrigacaoRequest;
use App\Http\Requests\UpdateObrigacaoRequest;
use App\Repositories\ObrigacaoRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;
use App\Imports\AtividadesImport;
use Maatwebsite\Excel\Facades\Excel;


class ObrigacaoController extends AppBaseController
{
    /** @var  ObrigacaoRepository */
    private $obrigacaoRepository;

    public function __construct(ObrigacaoRepository $obrigacaoRepo)
    {
        $this->obrigacaoRepository = $obrigacaoRepo;
    }

    /**
     * Display a listing of the Obrigacao.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $obrigacaos = $this->obrigacaoRepository->all();

        return view('obrigacaos.index')
            ->with('obrigacaos', $obrigacaos);
    }

    /**
     * Show the form for creating a new Obrigacao.
     *
     * @return Response
     */
    public function create()
    {
        return view('obrigacaos.create');
    }

    /**
     * Store a newly created Obrigacao in storage.
     *
     * @param CreateObrigacaoRequest $request
     *
     * @return Response
     */
    public function store(CreateObrigacaoRequest $request)
    {
        //$input = $request->all();
        $path = $request->file('excel')->getRealPath();
        $data=Excel::import(new AtividadesImport, $request->file('excel'));
        $obrigacao = $this->obrigacaoRepository->create($input);

        Flash::success('Obrigacao saved successfully.');

        return redirect(route('obrigacaos.index'));
    }

    /**
     * Display the specified Obrigacao.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $obrigacao = $this->obrigacaoRepository->find($id);

        if (empty($obrigacao)) {
            Flash::error('Obrigacao not found');

            return redirect(route('obrigacaos.index'));
        }

        return view('obrigacaos.show')->with('obrigacao', $obrigacao);
    }

    /**
     * Show the form for editing the specified Obrigacao.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $obrigacao = $this->obrigacaoRepository->find($id);

        if (empty($obrigacao)) {
            Flash::error('Obrigacao not found');

            return redirect(route('obrigacaos.index'));
        }

        return view('obrigacaos.edit')->with('obrigacao', $obrigacao);
    }

    /**
     * Update the specified Obrigacao in storage.
     *
     * @param int $id
     * @param UpdateObrigacaoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateObrigacaoRequest $request)
    {
        $obrigacao = $this->obrigacaoRepository->find($id);

        if (empty($obrigacao)) {
            Flash::error('Obrigacao not found');

            return redirect(route('obrigacaos.index'));
        }

        $obrigacao = $this->obrigacaoRepository->update($request->all(), $id);

        Flash::success('Obrigacao updated successfully.');

        return redirect(route('obrigacaos.index'));
    }

    /**
     * Remove the specified Obrigacao from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $obrigacao = $this->obrigacaoRepository->find($id);

        if (empty($obrigacao)) {
            Flash::error('Obrigacao not found');

            return redirect(route('obrigacaos.index'));
        }

        $this->obrigacaoRepository->delete($id);

        Flash::success('Obrigacao deleted successfully.');

        return redirect(route('obrigacaos.index'));
    }
}
