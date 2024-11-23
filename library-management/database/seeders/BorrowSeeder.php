<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Borrow;

class BorrowSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Borrow::create([
            'member_id' => 1,
            'book_id' => 1,
            'borrow_at' => now(),
            'return_at' => now()->addDays(14),
        ]);

        Borrow::create([
            'member_id' => 1,
            'book_id' => 2,
            'borrow_at' => now()->subDays(20),
            'return_at' => now()->subDays(6),
        ]);
    }
}
