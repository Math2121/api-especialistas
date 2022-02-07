<?php

namespace Modules\Register\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;

class CreateRegisterStudenteRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            //
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required',
            'terms' => 'required'
        ];
    }
    public function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(response()->json([
            'success' => false,
            'message' => 'Validation error',
            'data' => $validator->errors()
        ], 500));
    }
    public function messages()
    {
        return [
            'firstname.required' => 'O campo nome é obrigatório ',
            'lastname.required' => 'O campo sobrenome é obrigatório',
            'email.required' => 'O campo email é obrigatório',
            'email.email' => 'Campo email inválido',
            'email.unique' => 'Já existe um usuário com esse email',
            'password.required' => 'O campo senha e obrigatório',
            'terms.required' => 'Aceite os termos para continuar'
        ];
    }

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }
}
