<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|unique:portifolio_models|max:60|min:2',
            'subject' => 'required',
            'assessment' => 'required',
        ];
    }
    public function messages()
      {
          return [
            'name.required' => 'O nome é obrigatório',
            'subject.required' => 'O campo assunto é obrígatório',
            'assessment.required' => 'O campo mesagem é obrigatório',
            'name.unique' => 'Esse nome já existe',
            'name.min' => 'Esse campo precisa de pelo menos 2 caracteres',
          ];
      }
}
