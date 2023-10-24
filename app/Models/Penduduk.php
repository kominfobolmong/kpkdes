<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penduduk extends Model
{
    use HasFactory;
    protected $table = 'penduduk';
    protected $fillable = [
        'id_desa', 'id_hubungan', 'id_pekerjaan', 'alamat', 'dusun', 'rt', 'rw', 'no_kk', 'nik', 'nama', 'tempat_lahir', 'tgl_lahir', 'jenis_kelamin', 'nama_ibu_kandung', 'keterangan_padan', 'bansos_bpnt', 'bansos_pkh', 'bansos_bpnt_ppkm', 'pbi_jkn'
    ];

    protected $hidden = [];

    public function desa()
    {
        return $this->belongsTo(Desa::class, 'id_desa', 'id');
    }

    public function hubungan()
    {
        return $this->belongsTo(Hubungan::class, 'id_hubungan', 'id');
    }

    public function pekerjaan()
    {
        return $this->belongsTo(Pekerjaan::class, 'id_pekerjaan', 'id');
    }
}
