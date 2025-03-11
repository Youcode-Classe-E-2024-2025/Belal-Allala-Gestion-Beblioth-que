<?php

namespace Database\Factories;

use App\Models\Book;
use Illuminate\Database\Eloquent\Factories\Factory;

class CopyFactory extends Factory
{
    public function definition(): array
    {
        $book = Book::inRandomOrder()->first();
        if (!$book) {
            $book = Book::factory()->create();
        }

        return [
            'book_id' => $book->id,
            'status' => fake()->randomElement(['available', 'borrowed', 'damaged', 'lost']),
            'barcode' => fake()->unique()->ean13(),
            'acquisition_date' => fake()->date(),
        ];
    }
}