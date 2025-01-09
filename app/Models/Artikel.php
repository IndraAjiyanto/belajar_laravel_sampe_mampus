<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Kategori;
use App\Models\User;

class Artikel extends Model
{
    use HasFactory;

    protected $guarded = [
        'id'
    ];
    protected $with = ['kategori', 'penulis'];


    public function scopeFilter($query, array $filter){
        $query->when($filter['search'] ?? false, function($query, $search){
            return $query->where('judul', 'like', '%'. $search . '%')
            ->orwhere('isi', 'like', '%'. $search . '%');
        });

        $query->when($filter['kategori'] ?? false, function($query, $kategori){
            return $query->whereHas('kategori', function($query) use ($kategori){
                $query->where('link_kategori', $kategori);
            });
        });

        $query->when($filter['penulis'] ?? false, function($query, $penulis){
            return $query->whereHas('penulis', function($query) use ($penulis){
                $query->where('username', $penulis);
            });
        });
    }

    public function kategori(){
        return $this->belongsTo(Kategori::class);
    }

    public function penulis(){
        return $this->belongsTo(User::class, 'user_id');
    }

    public function getRouteKeyName(){
        return 'link';
    }
}


