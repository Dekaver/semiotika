<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Semiotika extends Model
{
    use HasFactory;

    protected $table = 'semiotika';

    protected $fillable = [
        'periode',
        'lokasi',
        'gps',
        'waktu',
        'Tanggal',
        'Tentang',
        'deskripsi_pendaftaraan',
        'link_pendaftaraan',
    ];
}
