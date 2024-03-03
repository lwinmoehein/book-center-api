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
        $chanMyae = Author::where('name','ချမ်းမြေ့၀င်း')->get()->first();
        $bamaw = Author::where('name','ဗန်းမော်တင်အောင်')->get()->first();


        $greatGatsby = Book::where('title','The Great Gatsby')->get()->first();
        $g1984 = Book::where('title','1984')->get()->first();
        $hitchHicker = Book::where('id',4)->get()->first();
        $mockingBird = Book::where('title','To Kill a Mockingbird')->get()->first();
        $harryPoter = Book::where('id',5)->get()->first();
        $prideAnd = Book::where('id',6)->get()->first();
        $theLord = Book::where('id',7)->get()->first();
        $theCatcher = Book::where('id',8)->get()->first();
        $mobyDick = Book::where('id',9)->get()->first();
        $theChronicles = Book::where('id',10)->get()->first();
        $thePicture = Book::where('id',11)->get()->first();
        $theBraveNew = Book::where('id',12)->get()->first();
        $janeEyre = Book::where('id',13)->get()->first();
        $theHobbit = Book::where('id',14)->get()->first();
        $frankenstein = Book::where('id',15)->get()->first();
        $theRoad = Book::where('id',16)->get()->first();
        $notGiving = Book::where('id',17)->get()->first();
        $myaing = Book::where('id',18)->get()->first();


        $greatGatsby->authors()->sync([$fScott->id]);
        $g1984->authors()->sync([$georgeOrwell->id]);
        $hitchHicker->authors()->sync([$douglasAdams->id]);
        $mockingBird->authors()->sync([$harperLee->id]);
        $harryPoter->authors()->sync([$jkRowling->id]);
        $prideAnd->authors()->sync([$janeAustin->id]);
        $theLord->authors()->sync([$jrrTol->id]);
        $theCatcher->authors()->sync([$jdSalinGer->id]);
        $mobyDick->authors()->sync([$hermanMelville->id]);
        $theChronicles->authors()->sync([$csLewis->id]);
        $thePicture->authors()->sync([$oscarWilde->id]);
        $theBraveNew->authors()->sync([$aldousHuxley->id]);
        $janeEyre->authors()->sync([$charlotteBronte->id]);
        $theHobbit->authors()->sync([$jrrTol->id]);
        $frankenstein->authors()->sync([$maryShelly->id]);
        $theRoad->authors()->sync([$cormacMacarthy->id]);
        $notGiving->authors()->sync([$chanMyae->id]);
        $myaing->authors()->sync([$bamaw->id]);

    }
}
