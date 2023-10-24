<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApbdSubRekening extends Model
{
    use HasFactory;
    protected $table = 'apbd_sub_rekening';
    protected $fillable = [
        'id_sub_rekening', 'id_desa', 'anggaran', 'tahun', 'id_sumber_dana'
    ];

    protected $hidden = [];

    public function sub_rekening()
    {
        return $this->belongsTo(SubRekening::class, 'id_sub_rekening', 'id');
    }
    public function desa()
    {
        return $this->belongsTo(Desa::class, 'id_desa', 'id');
    }
    public function sumber_dana()
    {
        return $this->belongsTo(SumberDana::class, 'id_sumber_dana', 'id');
    }
}
