<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApbdRekening extends Model
{
    use HasFactory;
    protected $table = 'apbd_rekening';
    protected $fillable = [
        'id_desa', 'id_sub_bidang', 'id_sumber_dana', 'tahun', 'kode', 'uraian', 'anggaran'
    ];

    protected $hidden = [];

    public function sub_bidang()
    {
        return $this->belongsTo(SubBidang::class, 'id_sub_bidang', 'id');
    }

    public function sumber_dana()
    {
        return $this->belongsTo(SumberDana::class, 'id_sumber_dana', 'id');
    }

    public function desa()
    {
        return $this->belongsTo(Desa::class, 'id_desa', 'id');
    }

    public function item_pekerjaan()
    {
        return $this->hasMany(ItemPekerjaan::class, 'id_apbd_rekening', 'id');
    }
}
