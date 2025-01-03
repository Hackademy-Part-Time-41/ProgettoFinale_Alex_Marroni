<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreArticleRequest extends FormRequest
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
            'title'=>'required|max:50',
             'body'=>'required|max:255',
            'author_id'=>'required|max:30',
            'image'=>'mimes:jpg,jpeg'
        ];
    }

    public function messages(){

        return [

            'title.required'=>'Il titolo deve essere inserito',
            'title.max'=>'Il titolo può avere al massimo :max caratteri',
            'body.required'=>'Il corpo deve essere inserito',
            'body.max'=>'Il corpo può essere al massimo di :max caratteri',
            'author.required'=>'L\'autore è richiesto'

        ];

    }

}
