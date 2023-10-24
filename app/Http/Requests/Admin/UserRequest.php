<?php

namespace App\Http\Requests\Admin;

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
            'name' => 'required|string:255',
            'email' => 'sometimes|email|unique:users,email',
            'password' => 'sometimes|string|min:8',
            'roles' => 'required',
            'id_opd' => 'required|array'
        ];
    }
}
