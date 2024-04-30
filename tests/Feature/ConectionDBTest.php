<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ConectionDBTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testDBConectionTest()
    {
        $this->assertTrue(\DB::connection()->getPdo() != null);
    }

    /**
     * Test if tables exist
     * 
     * @return void
     */
    public function testDatabaseTablesExiste()
    {
        $tables = [
            "curriculos",
            "failed_jobs",
            "migrations",
            "password_resets",
            "personal_access_tokens",
            "users"
        ];

        foreach ($tables as $table) {
            $this->assertTrue(\Schema::hasTable($table));
        }
    }
}
