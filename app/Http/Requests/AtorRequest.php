<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AtorRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'nome' => 'required|string|min:5',
            'nacionalidade_id' => 'required',
            'data_nascimento' => 'required|date',
            'inicio_atividades' => 'required|date',
        ];
    }
}
