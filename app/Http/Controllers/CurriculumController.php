<?php

namespace App\Http\Controllers;

use App\Http\Requests\CurriculumRequest;
use App\Services\StoreCurriculo;

class CurriculumController extends Controller
{
    protected $store_curriculo;

    public function __construct(StoreCurriculo $store_curriculo)
    {
        $this->store_curriculo = $store_curriculo;
    }

    public function store(CurriculumRequest $request)
    {
        $store_curriculo = $this->store_curriculo->store($request);

        if ($store_curriculo === true) {
            toastr()->success("Dados Enviados com Sucesso");
            return redirect()->back();
        }
        if ($store_curriculo === false) {
            toastr()->error("Houve alguma falha no envio das suas informações, tente novamente.");
            return redirect()->back();
        }
    }
}
