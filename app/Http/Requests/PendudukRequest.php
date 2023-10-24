<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PendudukRequest extends FormRequest
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
            'id_pekerjaan' => 'required|integer|exists:pekerjaan,id',
            'id_hubungan' => 'required|integer|exists:hubungan,id',
            'id_desa' => 'required|integer|exists:desa,id',
            'laki_laki' => 'required',
            'perempuan' => 'required',
            'jumlah' => 'required',
            'tahun' => 'required',
        ];
    }
}
