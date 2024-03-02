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
        $fScott = Author::where('name','F. Scott Fitzgerald')->get()->first();
        $georgeOrwell = Author::where('name','George Orwell')->get()->first();
        $douglasAdams = Author::where('name','Douglas Adams')->get()->first();
        $harperLee = Author::where('name','Harper Lee')->get()->first();
        $jkRowling = Author::where('name','J.K. Rowling')->get()->first();
        $janeAustin = Author::where('name','Jane Austen')->get()->first();
        $jrrTol = Author::where('name','J.R.R. Tolkien')->get()->first();
        $jdSalinGer = Author::where('name','J.D. Salinger')->get()->first();
        $hermanMelville = Author::where('name','Herman Melville')->get()->first();
        $csLewis = Author::where('name','C.S. Lewis')->get()->first();
        $oscarWilde = Author::where('name','Oscar Wilde')->get()->first();
        $aldousHuxley = Author::where('name','Aldous Huxley')->get()->first();
        $charlotteBronte = Author::where('name','Charlotte Brontë')->get()->first();
        $maryShelly = Author::where('name','Mary Shelley')->get()->first();
        $cormacMacarthy = Author::where('name','Cormac McCarthy')->get()->first();

        $greatGatsby = Book::where('title','The Great Gatsby')->get()->first();
        $g1984 = Book::where('title','1984')->get()->first();
        $hitchHicker = Book::where('id',4)->get()->first();
        $mockingBird = Book::where('title','To Kill a Mockingbird')->get()->first();

        $greatGatsby->authors()->sync([$fScott->id]);
        $g1984->authors()->sync([$georgeOrwell->id]);
        $hitchHicker->authors()->sync([$douglasAdams->id]);
        $mockingBird->authors()->sync([$harperLee->id]);
    }
}
