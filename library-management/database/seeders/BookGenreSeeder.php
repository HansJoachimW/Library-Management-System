<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Book;

class BookGenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Book::find(1)->genres()->attach([1, 2]);
        Book::find(2)->genres()->attach([3, 4]);
        Book::find(3)->genres()->attach([5]);
    }
}
