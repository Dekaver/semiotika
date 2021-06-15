<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemakalah extends Model
{
    use HasFactory;

    protected $table = 'pemakalah';

    protected $fillable = [
        'id_semiotika',
        'jenis',
        'benefit',
        'harga',
    ];
}
