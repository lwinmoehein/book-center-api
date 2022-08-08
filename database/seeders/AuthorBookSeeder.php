<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Author;
use App\Models\Book;

class AuthorBookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $authors = Author::all();

        // Populate the pivot table
        Book::all()->each(function ($book) use ($authors) {
            $book->authors()->sync(
                $authors->random(rand(1, 3))->pluck('id')->toArray()
            );
        });
    }
}
