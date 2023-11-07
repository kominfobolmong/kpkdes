<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ItemPekerjaan extends Model
{
    use HasFactory;
    protected $table = 'item_pekerjaan';
    protected $fillable = [
        'id_apbd_rekening', 'id_desa', 'nama', 'target', 'anggaran'
    ];

    protected $hidden = [];

    public function apbd_rekening()
    {
        return $this->belongsTo(ApbdRekening::class, 'id_apbd_rekening', 'id');
    }

    public function desa()
    {
        return $this->belongsTo(Desa::class, 'id_desa', 'id');
    }

    public function tenaga_kerja()
    {
        return $this->hasMany(TenagaKerja::class, 'id_item_pekerjaan', 'id');
    }
}
