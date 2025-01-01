<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Artikel;
use App\Models\Kategori;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // User::create([
        //     'nama' => 'indra',
        //     'email' => 'indraajiyanto092@gmail.com',
        //     'password' => bcrypt('abcd')
        // ]);

        // User::create([
        //     'nama' => 'indra aji',
        //     'email' => 'indraaji1@gmail.com',
        //     'password' => bcrypt('1234')
        // ]);

        User::factory(5)->create();
        Artikel::factory(20)->create();

        Kategori::create([
            'nama' => 'ngoding',
            'link_kategori' => 'ngoding'
        ]);

        Kategori::create([
            'nama' => 'desain',
            'link_kategori' => 'desain'
        ]);

        // Artikel::create([
        //     'judul' => 'belajar laravel',
        //     'link' => 'belajar-laravel',
        //     'isi' => 'laravel adalah',
        //     'user_id' => 1,
        //     'kategori_id' => 1
        // ]);

        // Artikel::create([
        //     'judul' => 'belajar figma',
        //     'link' => 'belajar-figma',
        //     'isi' => 'figma adalah',
        //     'user_id' => 1,
        //     'kategori_id' => 2
        // ]);

        // Artikel::create([
        //     'judul' => 'belajar react',
        //     'link' => 'belajar-react',
        //     'isi' => 'react adalah',
        //     'user_id' => 2,
        //     'kategori_id' => 1
        // ]);
        
        // Artikel::create([
        //     'judul' => 'belajar autocad',
        //     'link' => 'belajar-autocad',
        //     'isi' => 'autocad adalah',
        //     'user_id' => 2,
        //     'kategori_id' => 2
        // ]);
    }
}
