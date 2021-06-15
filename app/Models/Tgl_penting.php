<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tgl_penting extends Model
{
    use HasFactory;

    protected $table = 'tgl_penting';

    protected $fillable = [
        'id_semiotika',
        'tanggal',
        'waktu',
    ];
}
