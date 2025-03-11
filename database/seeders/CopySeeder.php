<?php

namespace Database\Seeders;

use App\Models\Copy;
use App\Models\Book;
use Illuminate\Database\Seeder;

class CopySeeder extends Seeder
{
    public function run(): void
    {
         Copy::factory(50)->create();
    }
}