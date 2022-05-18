<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Keluar extends Model
{
    use HasFactory;

    protected $fillable = [
        'kode', 'tanggal', 'keterangan', 'jumlah', 'created_at',
    ];
}
