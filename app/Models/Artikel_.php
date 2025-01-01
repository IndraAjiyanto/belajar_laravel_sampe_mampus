<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artikel
{
    private static $posts = [
        [
            "judul" => "indre kece",
            "link" => "indra-kece",
            "penulis" => "indra",
            "isi" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus, quis eum perferendis consequatur nam consequuntur odit et dolorum quae repellat consectetur asperiores non dicta nulla assumenda ipsam nemo laudantium vitae?"
        ],[
            "judul" => "indre ganteng",
            "link" => "indra-ganteng",
            "penulis" => "indra",
            "isi" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus, quis eum perferendis consequatur nam consequuntur odit et dolorum quae repellat consectetur asperiores non dicta nulla assumenda ipsam nemo laudantium vitae?"
        ]
    ];

    public static function all(){
        return collect(self::$posts);
    }

    public static function find($link){
        $posts = static::all();
        return $posts->firstWhere('link',$link);
    } 
}