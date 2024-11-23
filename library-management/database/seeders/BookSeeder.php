<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Book;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $books = [
            ['title' => 'Dune', 'author' => 'Frank Herbert', 'year_published' => 1965, 'synopsis' => 'A sci-fi epic.', 'genre' => 1],
            ['title' => '1984', 'author' => 'George Orwell', 'year_published' => 1949, 'synopsis' => 'Dystopian novel.', 'genre' => 1],
            ['title' => 'Pride and Prejudice', 'author' => 'Jane Austen', 'year_published' => 1813, 'synopsis' => 'Classic romance.', 'genre' => 5],
        ];

        foreach ($books as $book) {
            Book::create($book);
        }
    }
}
