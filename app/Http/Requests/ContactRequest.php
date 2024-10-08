<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            'name' => 'required|min:2|max:40',  
            'email' => 'required|min:5|max:80|email',  
            'subject' => 'required|min:5|max:50',
            'message' => 'required|min:10|max:500'
        ];
    }
    // public function attributes(){
    //     return [
    //         'name' => 'имя',
    //     ];
    // }
    public function messages(){ //вместо этого можно использовать resources/lang/ru/
        return[
            'required'=>'Поле :attribute является обязательным',
            'min'=>'Поле :attribute должно содержать не менее :min символов',
            'max'=>'Поле :attribute должно содержать до :max символов',
            'email'=>'Поле :attribute должно содержать действительный адрес электронной почты',
        ];
    }
}
