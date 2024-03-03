<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(1)->create(
          [
            'name' => 'John Doe',
            'email' => 'test@test.com',
            'email_verified_at' => now(),
	    'password'=>Hash::make('password')
          ]
        );
        \App\Models\User::factory(20)->create();
        $this->call([
          CategorySeeder::class,
          AuthorSeeder::class,
            LanguageSeeder::class,
            BookSeeder::class,
            BookCategorySeeder::class,
            AuthorBookSeeder::class
         ]);
    }
}
