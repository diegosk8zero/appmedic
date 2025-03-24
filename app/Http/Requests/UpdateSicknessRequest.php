<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateSicknessRequest extends FormRequest
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
            //
            'name'        => 'required|string|max:255',
            'description' => 'required|string',
            'status' => 'required'
        ];
    }

    public function messages(): array
    {
        return [
            'name.required'        => 'O campo Nome é obrigatório.',
            'description.required' => 'O campo Descrição é obrigatório.',
            'status.required' => 'O campo Status é obrigatório.'
        ];
    }
}
