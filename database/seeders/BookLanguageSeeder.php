<?php

namespace Database\Seeders;

use App\Models\Language;
use Illuminate\Database\Seeder;
use App\Models\Book;

class BookLanguageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $languages = Language::all();

        // Populate the pivot table
        Book::all()->each(function ($book) use ($languages) {
            $book->languages()->attach(
                $languages->random(rand(1, 2))->pluck('id')->toArray()
            );
        });
    }
}
