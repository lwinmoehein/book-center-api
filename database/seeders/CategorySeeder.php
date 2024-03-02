<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Category::create(['name'=>'Classic Literature']);
        Category::create(['name'=>'Dystopian Fiction']);
        Category::create(['name'=>'Science Fiction']);
        Category::create(['name'=>'Southern Gothic']);
        Category::create(['name'=>'Fantasy']);
        Category::create(['name'=>'Romance']);
        Category::create(['name'=>'Adventure']);
        Category::create(['name'=>'Gothic Fiction']);
        Category::create(['name'=>'Coming-of-Age']);
        Category::create(['name'=>'Post-Apocalyptic Fiction']);

    }
}
