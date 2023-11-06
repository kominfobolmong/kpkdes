<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ItemPekerjaanRequest extends FormRequest
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
            'id_apbd_rekening' => 'required|integer|exists:apbd_rekening,id',
            'id_desa' => 'required|integer|exists:desa,id',
            'target' => 'required',
            'anggaran' => 'required',
        ];
    }
}
