<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PeminjamanBuku extends Model
{
    use HasFactory;
    protected $guarded=[
        'id'
    ];

    function anggota() {
        return $this->belongsTo(anggota::class);
    }
    function buku() {
        return $this->belongsTo(buku::class);
    }
}
