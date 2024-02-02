<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class daftardokter extends Model
{
    use HasFactory;
    protected $table ='daftardokters';
    protected $guarded = ['id'];
    public function scopeFilter($query, array $filters)
    {

        $query->when($filters['search'] ?? false, function ($query, $search) {
            return $query->where('kd_dok', 'like', '%' . $search . '%')
                ->orWhere('nama', 'like', '%' . $search . '%')
                ->orWhere('tempat', 'like', '%' . $search . '%')
                ->orWhere('tgl_lahir', 'like', '%' . $search . '%')
                ->orWhere('alamat', 'like', '%' . $search . '%')
                ->orWhere('bagian', 'like', '%' . $search . '%')
                ->orWhere('specialty', 'like', '%' . $search . '%')
                ->orWhere('photo', 'like', '%' . $search . '%');
        });
    }
}

