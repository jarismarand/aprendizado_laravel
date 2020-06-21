<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClienteRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;  /** Por padrão, alterar para true */
    }

    public function messages()
    {
        return [
            'nome.required' => 'Preencha um nome',
            'nome.max' => 'O tamanho máximo é 255 caracteres',
            'email.required'=> 'O preenchimento do e-mail é obrigatório',
            'email.email'=> 'Por favor digite um e-mail com formato válido',
            'email.max'=>'O e-mail deve ter até 255 caracteres',
            'endereco.required'=>'O campo Endereço é obrogatório'
        ];
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {



        return [
            'nome' => 'required|max:30',
            'email' => 'required|email|max:30',
            'endereco' => 'required',
            ];
    }
}
