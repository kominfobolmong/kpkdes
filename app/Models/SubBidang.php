<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubBidang extends Model
{
    use HasFactory;
    protected $table = 'budidaya_ikans';
    protected $fillable = [
        'id_bidang', 'nama'
    ];

    protected $hidden = [];

    public function bidang()
    {
        return $this->belongsTo(Bidang::class, 'id_bidang', 'id');
    }
}
