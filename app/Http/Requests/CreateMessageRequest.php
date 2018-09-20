<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateMessageRequest extends FormRequest
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
            'first_name' => [ 'required', 'min:3' ],
            'last_name' => [ 'nullable', 'min:3' ],
            'subject' => [ 'required', 'min:10' ],
            'email' => [ 'nullable', 'email' ],
            'message' => [ 'min:20', 'max:1000' ],
        ];
    }
}
