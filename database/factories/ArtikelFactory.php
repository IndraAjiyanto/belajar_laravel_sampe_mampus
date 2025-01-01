<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Artikel>
 */
class ArtikelFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'judul' => fake()->sentence(rand(2,5)),
            'link' => fake()->slug(),
            'isi' => fake()->paragraph(rand(50,70)),
            'user_id' => rand(1,5),
            'kategori_id' => rand(1,2),
        ];
    }
}
