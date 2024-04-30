<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curriculo extends Model
{
    use HasFactory;

     /**
     * 
     *
     * @var string
     */

    protected $table = 'curriculos';
    
    protected $fillable = [
        "nome",
        "telefone",
        "cargo",
        "escolaridade",
        "observacoes",
        "file_curriculum_path",
        "ip_machine"
    ];
}
