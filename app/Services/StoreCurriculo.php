<?php

namespace App\Services;

use App\Models\Curriculo;

class StoreCurriculo
{
    protected $upload_store;
    protected $send_email;

    public function __construct(UploadFile $upload_store, MailSendCurriculum $send_email)
    {
        $this->upload_store = $upload_store;
        $this->send_email = $send_email;
    }


    public function store($request)
    {
        $path_name = $this->upload_store->UploadStore($request->file('arquivo'));
        $ip = $request->ip();
        try {

            Curriculo::create([
                "nome" => $request->nome,
                "email" => $request->email,
                "telefone" => $request->telefone,
                "cargo" => $request->cargo,
                "escolaridade" => $request->escolaridade,
                "observacoes" => $request->observacoes,
                "file_curriculum_path" => $path_name,
                "ip_machine" => $ip,
            ]);

            $form_associative = [
                "nome" => $request->nome,
                "email" => $request->email,
                "telefone" => $request->telefone,
                "cargo" => $request->cargo,
                "escolaridade" => $request->escolaridade,
                "observacoes" => $request->observacoes,
                "arquivo" => $path_name,
                "ip" => $request->ip()
            ];

            $this->send_email->Dispatch($request->email, $form_associative);

            return true;
        } catch (\Throwable $th) {
            return false;
        }
    }
}