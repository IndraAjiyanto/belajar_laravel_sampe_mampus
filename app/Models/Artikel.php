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

    public function kategori(){
        return $this->belongsTo(Kategori::class);
    }

    public function penulis(){
        return $this->belongsTo(User::class, 'user_id');
    }
}


