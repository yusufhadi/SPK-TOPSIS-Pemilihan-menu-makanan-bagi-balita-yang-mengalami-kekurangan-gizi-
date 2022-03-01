<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penentuan extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'umur',
        'bobot_umur',
        'beratBadan',
        // 'bobot_beratBadan',
        'tinggiBadan',
        // 'bobot_tinggiBadan',
        'alergi'
        // 'bobot_alergi'
    ];
}
