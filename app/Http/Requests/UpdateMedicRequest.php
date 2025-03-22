<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateMedicRequest extends FormRequest
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
            'email'       => 'required|email|max:255',
            'phone'       => 'required|string|max:20',
            'phone_2'     => 'required|string|max:20',
            'certification'      => 'required|string|max:255',
            'birth'      => 'required|string|max:255',
            'description' => 'required|string',
            'clinic_id' => 'required|string|max:500',
        ];
    }

    public function messages(): array
    {
        return [
            'name.required'        => 'O campo Nome é obrigatório.',
            'email.required'       => 'O campo Email é obrigatório.',
            'email.email'          => 'Insira um email válido.',
            'phone.required'       => 'O campo Telefone é obrigatório.',
            'phone_2.required'     => 'O campo Telefone Secundário é obrigatório.',
            'certification.required'      => 'O campo Endereço é obrigatório.',
            'birth.required'      => 'O campo data de nascimento é obrigatório.',
            'clinic_id.required'      => 'O campo Clinica é obrigatório.',
            'description.required' => 'O campo Descrição é obrigatório.',
        ];
    }
}
