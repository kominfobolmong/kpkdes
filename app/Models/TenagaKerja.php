<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TenagaKerja extends Model
{
    use HasFactory;
    protected $table = 'tenaga_kerja';
    protected $fillable = [
        'id_item_pekerjaan', 'id_penduduk', 'id_desa', 'tahun'
    ];

    protected $hidden = [];

    public function penduduk()
    {
        return $this->belongsTo(Penduduk::class, 'id_penduduk', 'id');
    }

    public function item_pekerjaan()
    {
        return $this->belongsTo(ItemPekerjaan::class, 'id_item_pekerjaan', 'id');
    }
}
