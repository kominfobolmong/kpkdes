<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bidang extends Model
{
    use HasFactory;
    protected $table = 'bidang';
    protected $fillable = [
        'nama'
    ];

    protected $hidden = [];
    public function sub_bidang()
    {
        return $this->hasMany(SubBidang::class, 'id_bidang', 'id');
    }
}
