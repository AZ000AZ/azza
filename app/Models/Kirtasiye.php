<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Kirtasiye extends Model
{
    use HasFactory;

    protected $table = 'kirtasiye';
    protected $primaryKey = 'id';
    protected $fillable = ['name', 'description', 'price', 'image'];
}
