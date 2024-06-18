<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator as ValidationValidator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class FormControlRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
   

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title'=>'required',
            'num_pages'=>'required',
            'published_date'=>'required',
            'price'=>'required',
            'language_id'=>'required',
            'publisher_id'=>'required'
        ];
    }

    public function failedValidation(ValidationValidator $validate)
    {
        throw new HttpResponseException(response([
            'success' => false,
            'message' => 'validation error',
            'data' => $validate->errors()
        ]));
    }
}
