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
        Book::create([
            'code'=>'ISBN 0-7432-7935-5',
            'title'=>'Harry Potter and the Sorcerer\'s Stone',
            'cover_url'=>'https://m.media-amazon.com/images/I/81q77Q39nEL._SY425_.jpg',
            'description'=>'Follow young wizard Harry Potter as he discovers his magical heritage and attends Hogwarts School of Witchcraft and Wizardry. This first book in the beloved series introduces readers to a world of magic, friendship, and adventure.',
            'price'=>'20',
            'published_at'=>'1997'
        ]);
        Book::create([
            'code'=>'ISBN 0-7432-7935-6',
            'title'=>'Pride and Prejudice',
            'cover_url'=>'https://m.media-amazon.com/images/I/410V9KJISjL._SY445_SX342_.jpg',
            'description'=>'Elizabeth Bennet navigates the complexities of love, class, and societal expectations in Georgian England in this timeless romance novel. Jane Austen\'s wit and sharp social commentary make this a perennial favorite.',
            'price'=>'18',
            'published_at'=>'1813'
        ]);
        Book::create([
            'code'=>'ISBN 0-7432-7935-7',
            'title'=>'The Lord of the Rings',
            'cover_url'=>'https://m.media-amazon.com/images/I/510XQhSh4pL._SY445_SX342_.jpg',
            'description'=>'Join Frodo Baggins and his companions as they embark on a perilous journey to destroy the One Ring and defeat the Dark Lord Sauron. Tolkien\'s epic fantasy trilogy is a masterpiece of world-building and storytelling.',
            'price'=>'30',
            'published_at'=>'1954'
        ]);
        Book::create([
            'code'=>'ISBN 0-7432-7935-8',
            'title'=>'The Catcher in the Rye',
            'cover_url'=>'https://m.media-amazon.com/images/I/51TI+w56qFL._SY445_SX342_.jpg',
            'description'=>'Holden Caulfield, a disillusioned teenager, wanders through New York City after being expelled from prep school. This seminal coming-of-age novel captures the angst and alienation of youth with honesty and insight.',
            'price'=>'38',
            'published_at'=>'1951'
        ]);
        Book::create([
            'code'=>'ISBN 0-7432-7935-9',
            'title'=>'Moby-Dick',
            'cover_url'=>'https://m.media-amazon.com/images/I/51TI+w56qFL._SY445_SX342_.jpg',
            'description'=>'Captain Ahab seeks revenge on the elusive white whale, Moby Dick, in this epic tale of obsession and the human spirit. Melville\'s masterpiece explores themes of fate, morality, and the nature of evil.',
            'price'=>'50',
            'published_at'=>'1851'
        ]);
        Book::create([
            'code'=>'ISBN 0-7432-7935-10',
            'title'=>'The Chronicles of Narnia',
            'cover_url'=>'https://m.media-amazon.com/images/I/51XZe4QdEFL._SY445_SX342_.jpg',
            'description'=>'Step through the wardrobe into the magical land of Narnia, where talking animals, mythical creatures, and epic battles await. This beloved series is a timeless classic of children\'s literature.',
            'price'=>'38',
            'published_at'=>'1950'
        ]);
        Book::create([
            'code'=>'ISBN 0-7432-7935-11',
            'title'=>'The Picture of Dorian Gray',
            'cover_url'=>'https://m.media-amazon.com/images/I/31gg3y2PmWL._SY445_SX342_.jpg',
            'description'=>'Dorian Gray remains forever young while a portrait of him ages and bears the marks of his moral corruption. Wilde\'s only novel is a haunting exploration of vanity, decadence, and the pursuit of beauty.',
            'price'=>'80',
            'published_at'=>'1980'
        ]);
        Book::create([
            'code'=>'ISBN 0-7432-7935-12',
            'title'=>'Brave New World',
            'cover_url'=>'https://m.media-amazon.com/images/I/51qUjJFVSpL._SY445_SX342_.jpg',
            'description'=>'In a future society where citizens are engineered and conditioned for conformity and happiness, one man challenges the status quo. Huxley\'s dystopian vision critiques the dangers of technological progress and social control.',
            'price'=>'34',
            'published_at'=>'1932'
        ]);
        Book::create([
            'code'=>'ISBN 0-7432-7935-13',
            'title'=>'Jane Eyre',
            'cover_url'=>'https://m.media-amazon.com/images/I/41JRiia42dL._SY445_SX342_.jpg',
            'description'=>'Orphaned and mistreated, Jane Eyre overcomes adversity to find love and independence. Brontë\'s novel is a compelling exploration of feminism, morality, and the human condition.',
            'price'=>'80',
            'published_at'=>'1847'
        ]);
        Book::create([
            'code'=>'ISBN 0-7432-7935-14',
            'title'=>'The Hobbit',
            'cover_url'=>'https://m.media-amazon.com/images/I/41R23wIsc-L._SY445_SX342_.jpg',
            'description'=>'Bilbo Baggins, a hobbit of the Shire, joins a company of dwarves on a quest to reclaim their homeland from the dragon Smaug. Tolkien\'s enchanting tale is a prelude to his epic masterpiece, The Lord of the Rings.',
            'price'=>'30',
            'published_at'=>'1937'
        ]);
        Book::create([
            'code'=>'ISBN 0-7432-7935-15',
            'title'=>'Frankenstein',
            'cover_url'=>'https://m.media-amazon.com/images/I/51AU6VDF3sL._SY445_SX342_.jpg',
            'description'=>'Dr. Victor Frankenstein creates a monstrous creature in his quest to unlock the secrets of life. Shelley\'s groundbreaking novel explores themes of ambition, morality, and the consequences of scientific hubris. ',
             'price'=>'30',
            'published_at'=>'1818'
        ]);
        Book::create([
            'code'=>'ISBN 0-7432-7935-16',
            'title'=>'The Road',
            'cover_url'=>'https://m.media-amazon.com/images/I/41npWbMZ1HL._SY445_SX342_.jpg',
            'description'=>'A father and son journey through a post-apocalyptic landscape, struggling to survive and retain their humanity. McCarthy\'s spare prose and bleak vision create a haunting portrait of a world ravaged by disaster.',
            'price'=>'28',
            'published_at'=>'2006'
        ]);

        Book::create([
            'code'=>'ISBN 0-7432-8001-1',
            'title'=>'ဂရုမစိုက်ခြင်းအနုပညာ',
            'cover_url'=>'https://s3.bitmyanmar.info/wunzin/assets/book/cover/cmw_gayumasikechin.jpg',
            'description'=>'ဒီစာအုပ်ကတော့ နာမည်ကြီး ဘလော့ဂါတစ်ဦးဖြစ်သူ Mark Manson ရေးသားခဲ့တဲ့ The Subtle art of not giving a f*ck ဆိုတဲ့ စာအုပ်ကို ဘာသာပြန်ဆိုထားတာပဲ ဖြစ်ပါတယ်။ စတင်ထုတ်ဝေပြီးချိန်ကနေ အခုအချိန်အထိ အကြိမ်ကြိမ် ပြန်လည်ပုံနှိပ်ထုတ်ဝေခဲ့ရတဲ့ အရောင်းရဆုံး စာအုပ်တစ်အုပ်လည်းဖြစ်ပြီး လူမှုကွန်ယက်စာမျက်နှာတွေပေါ်မှာလည်း အောင်မြင်ခဲ့တဲ့ စာအုပ်တစ်အုပ်ပဲ ဖြစ်ပါတယ်။',
            'price'=>'38',
            'published_at'=>'2018'
        ]);
        Book::create([
            'code'=>'ISBN 0-7432-8001-2',
            'title'=>'မြိုင်',
            'cover_url'=>'https://s3.bitmyanmar.info/wunzin/assets/book/cover/bmta_mying.jpg',
            'description'=>'လွတ်လပ်ရေးရပြီးခေတ် ဖြစ်ပေမဲ့ ကိုလိုနီခေတ် အငွေ့အသက်တွေ လွှမ်းမိုးနေဆဲ လူ့အထက်တန်းလွှာမှာ မွေးဖွားလာသူ မြိုင် ဆိုတဲ့ ခေတ်သမီးပျိုတစ်ဦးနဲ့ အရင်းရှင်စနစ်ကို မုန်းတီးစက်ဆုပ်ပြီး ကိုယ်ယုံကြည်ရာ သတင်းစာအလုပ်မှာ ဘဝကို မြှုပ်နှံထားသူ ကိုတင်ဦး။',
            'price'=>'38',
            'published_at'=>'2018'
        ]);
    }
}
