<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rekening extends Model
{
    use HasFactory;
    protected $table = 'rekening';
    protected $fillable = [
        'kode', 'uraian'
    ];

    protected $hidden = [];

    public function sub_rekening()
    {
        return $this->hasMany(SubRekening::class, 'id_rekening', 'id');
    }
}
