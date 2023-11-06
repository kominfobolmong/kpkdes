<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Desa extends Model
{
    use HasFactory;
    protected $table = 'desa';
    protected $fillable = [
        'id_kecamatan', 'nama', 'id_desa'
    ];

    protected $hidden = [];


    public function kecamatan()
    {
        return $this->belongsTo(Kecamatan::class, 'id_kecamatan', 'id');
    }

    public function pkt($tahun = "")
    {
        $item = ItemPekerjaan::join('apbd_rekening', 'item_pekerjaan.id_apbd_rekening', '=', 'apbd_rekening.id')
            ->where('item_pekerjaan.id_desa', $this->id)
            ->where(function ($query) use ($tahun) {
                return $tahun != "" ?
                    $query->where('apbd_rekening.tahun', $tahun) : '';
            })->count();
        return $item;
    }
}
