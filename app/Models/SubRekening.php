<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubRekening extends Model
{
    use HasFactory;
    protected $table = 'sub_rekening';
    protected $fillable = [
        'id_rekening', 'kode', 'nama'
    ];

    protected $hidden = [];

    public function rekening()
    {
        return $this->belongsTo(Rekening::class, 'id_rekening', 'id');
    }
}
