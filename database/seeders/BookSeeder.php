<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Book;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
       Book::create([
           'code'=>'ISBN 0-7432-7935-1',
           'title'=>'The Great Gatsby',
           'cover_url'=>'https://m.media-amazon.com/images/I/81QuEGw8VPL._AC_UF894,1000_QL80_.jpg',
           'description'=>'Set in the summer of 1922, this novel explores themes of decadence, idealism, and excess as it follows the lives of wealthy socialites in Long Island. Jay Gatsby\'s lavish parties and his pursuit of the elusive Daisy Buchanan are at the heart of this tragic tale.',
           'price'=>'20',
           'published_at'=>'1925'
       ]);
        Book::create([
            'code'=>'ISBN 0-7432-7935-2',
            'title'=>'1984',
            'cover_url'=>'https://m.media-amazon.com/images/I/71rpa1-kyvL._AC_UF894,1000_QL80_.jpg',
            'description'=>'In a totalitarian society ruled by the Party and its leader Big Brother, Winston Smith rebels against the oppressive regime. This classic novel explores themes of surveillance, propaganda, and the erosion of individual freedom.
   Price: $9.99',
            'price'=>'30',
            'published_at'=>'1949'
        ]);
        Book::create([
            'code'=>'ISBN 0-7432-7935-3',
            'title'=>'The Hitchhiker\'s Guide to the Galaxy',
            'cover_url'=>'https://m.media-amazon.com/images/I/71i2fm1QJQL._AC_UF894,1000_QL80_.jpg',
            'description'=>'Arthur Dent, an ordinary human, finds himself embarking on a series of bizarre adventures through space after Earth is destroyed to make way for a hyperspace bypass. This humorous and surreal novel is a cult classic.',
            'price'=>'30',
            'published_at'=>'1949'
        ]);
        Book::create([
            'code'=>'ISBN 0-7432-7935-4',
            'title'=>'To Kill a Mockingbird',
            'cover_url'=>'https://m.media-amazon.com/images/I/61Mc8z+ceJL._AC_UF1000,1000_QL80_.jpg',
            'description'=>'Set in the racially charged atmosphere of the 1930s American South, this novel tells the story of Atticus Finch, a lawyer who defends a black man falsely accused of raping a white woman. Through the eyes of young Scout Finch, the novel explores themes of justice, morality, and compassion.',
            'price'=>'50',
            'published_at'=>'1960'
        ]);
    }
}
