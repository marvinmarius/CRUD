<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Requesto extends FormRequest
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
            'firstname' => 'required',
            'lastname' => 'required',
            'gender' => 'required',
            'country' => 'required',
            'city' => 'required',
            'address' => 'required',
        ];
    }

    public function messages()
    {
        return[
            'firstname.required'=> 'ce champ firstname est obligatoire',
            'lastname.required'=>'ce champ lastnamr es obligatoire',
            'gender.required'=>'ce champ gender es obligatoire',
            'country.required'=>'ce champ country es obligatoire',
            'city.required'=>'ce champ city es obligatoire',
            'address.required'=>'ce champ address es obligatoire',


];
    }
}
