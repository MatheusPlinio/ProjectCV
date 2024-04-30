<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class TableColumnsExistTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testCheckTableColumnsIfExist()
    {
        $table_name = 'curriculos';

        $expected_columns = [
            'id',
            'nome',
            'telefone',
            'cargo',
            'escolaridade',
            'observacoes',
            'file_curriculum_path',
            'ip_machine'
        ];

        foreach ($expected_columns as $column) {
            $this->assertTrue(\Schema::hasColumn($table_name, $column));
        }
    }
}
