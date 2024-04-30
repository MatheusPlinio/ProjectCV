<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CurriculumRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            "nome" => "required",
            "telefone" => "required",
            "cargo" => "required",
            "escolaridade" => "required",
            "arquivo" => "required|file|max:1024|mimes:doc,docx,pdf",
            ["arquivo.mimes" => "O arquivo deve ser do tipo doc, docx, pdf"]
        ];
    }
}
