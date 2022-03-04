<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Modelo1 extends Model
{
    use HasFactory;
    protected $fillable = ['tamaño', 'ingredientes', 'precio'];
}
