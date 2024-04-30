<?php

namespace Tests\Browser;

use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class RegisterSendCurriculumTest extends DuskTestCase
{
    /** @test */
    public function check_if_forms_curriculum_is_correct()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                ->type('nome', "MatheusTeste")
                ->type("email", "user@example.com")
                ->type("telefone", "(84)920011577")
                ->type("cargo", "Desenvolvedor Fullstack")
                ->select("escolaridade", "Ensino Superior Completo")
                ->type("observacoes", "Teste de envio de curriculo")
                ->attach("arquivo", __DIR__ . "/source/comprovante_picpay_BLF_12032024081956.pdf")
                ->press('Enviar')
                ->assertPathIs('/');
        });
    }
}
