<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Daftar extends Model
{
    use HasFactory;
    protected $table = 'daftars';
    protected $guarded = ['id'];

    public function scopeFilter($query, array $filters)
    {
        $query->when($filters['search'] ?? false, function ($query, $search) {
            return $query->where('nama', 'like', '%' . $search . '%')
                ->orWhere('tgl_book', 'like', '%' . $search . '%')
                ->orWhere('telpon', 'like', '%' . $search . '%')
                ->orWhere('layanan', 'like', '%' . $search . '%')
                ->orWhere('created_at', 'like', '%' . $search . '%');
        });
    }
}
