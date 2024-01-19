<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class daftardokter extends Model
{
    use HasFactory;
    protected $table ='daftardokters';
    protected $fillable = [
        'kd_dok',
        'nama',
        'department',
        'specialty',
        
    ];
}
