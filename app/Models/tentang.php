<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tentang extends Model
{
    use HasFactory;
    protected $table ='tentangs';
    protected $fillable = [
        'sejarah',
    ];
}
