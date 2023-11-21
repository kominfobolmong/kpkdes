<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class RealisasiAnggaranRequest extends FormRequest
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
            'id_desa' => 'required|integer|exists:desa,id',
            'id_sumber_dana' => 'required|integer|exists:sumber_dana,id',
            'tahun' => 'required',
            'kode' => 'required',
            'uraian' => 'required',
            'anggaran' => 'required',
            'realisasi' => 'required',
            'lebih_kurang' => 'required',
        ];
    }
}
