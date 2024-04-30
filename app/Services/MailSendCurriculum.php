<?php

namespace App\Services;

use Carbon\Carbon;
use Mail;

class MailSendCurriculum
{
    public function Dispatch($email, $form)
    {

        $nome = $form['nome'];
        $email = $form['email'];
        $telefone = $form['telefone'];
        $cargo = $form['cargo'];
        $escolaridade = $form['escolaridade'];
        $observacoes = $form['observacoes'];
        $carbon = Carbon::now();
        Mail::send([], [], function ($message) use ($email, $nome, $telefone, $cargo, $escolaridade, $observacoes, $carbon) {
            $message->to($email)
                ->subject("Processo Seletivo")
                ->html(
                    "<p>Recebemos seus dados:</p>
                <p>Nome: $nome</p>
                <p>E-mail: $email</p>
                <p>Telefone: $telefone</p>
                <p>Cargo: $cargo</p>
                <p>Escolaridade: $escolaridade</p>
                <p>Observações: $observacoes</p>
                <p>Data & Hora: $carbon</p>"
                );
        });
    }
}