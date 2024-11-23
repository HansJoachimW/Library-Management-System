<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Genre;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $genres = ['Science Fiction', 'Fantasy', 'Mystery', 'Non-Fiction', 'Romance'];

        foreach ($genres as $genre) {
            Genre::create(['name' => $genre]);
        }
    }
}
