<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Author;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Author::create(['name'=>'F. Scott Fitzgerald']);
        Author::create(['name'=>'George Orwell']);
        Author::create(['name'=>'Douglas Adams']);
        Author::create(['name'=>'Harper Lee']);
        Author::create(['name'=>'J.K. Rowling']);
        Author::create(['name'=>'Jane Austen']);
        Author::create(['name'=>'J.R.R. Tolkien']);
        Author::create(['name'=>'J.D. Salinger']);
        Author::create(['name'=>'Herman Melville']);
        Author::create(['name'=>'C.S. Lewis']);
        Author::create(['name'=>'Oscar Wilde']);
        Author::create(['name'=>'Aldous Huxley']);
        Author::create(['name'=>'Charlotte Brontë']);
        Author::create(['name'=>'J.R.R. Tolkien']);
        Author::create(['name'=>'Mary Shelley']);
        Author::create(['name'=>'Cormac McCarthy']);
        Author::create(['name'=>'ချမ်းမြေ့၀င်း']);
        Author::create(['name'=>'ဗန်းမော်တင်အောင်']);
    }
}
