<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class visimisi extends Model
{
    use HasFactory;
    protected $table ='visimisis';
    protected $fillable = [
        'visi',
        'misi',
    ];
}
