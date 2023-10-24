<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubRekening extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_rekening', 'kode', 'uraian'
    ];

    protected $hidden = [];

    public function rekening()
    {
        return $this->belongsTo(Rekening::class, 'id_rekening', 'id');
    }
}
