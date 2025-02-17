<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Artikel;

class kategori extends Model
{
    use HasFactory;

    protected $guarded = [
        'id'
    ];

    public function artikel(){
        return $this->hasMany(Artikel::class);
    }
}
