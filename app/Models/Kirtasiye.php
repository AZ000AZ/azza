<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kirtasiye extends Model
{
    use HasFactory;

    protected $table = 'kirtasiye';
    // Veritabanındaki tablo adı

    protected $fillable = [
        'name',
        'description',
        'price',
        'image'
    ];
}
