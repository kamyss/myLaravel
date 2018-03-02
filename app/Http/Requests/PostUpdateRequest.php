<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Validator;

class PostUpdateRequest extends FormRequest
{

    // protected function formatValidationErrors(Validator $validator)
    // {
    //      $message = $validator->errors()->first();
    //      return ['message'=>$message, 'status_code' => 500];
    // }
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
            //
            'username'=>'required'
        ];
    }
    public function messages(){
        return [
            'username.required'=>'请填写账户名',
        ];
    }
}
