<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Keuangan extends Model
{
    
    
    protected $fillable = ['judul', 'icon', 'nominal', 'jenis'];
    use HasFactory;
}
