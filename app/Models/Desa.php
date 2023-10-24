<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Desa extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_kecamatan', 'nama'
    ];

    protected $hidden = [];


    public function kecamatan()
    {
        return $this->belongsTo(Opd::class, 'id_opd', 'id');
    }
}
