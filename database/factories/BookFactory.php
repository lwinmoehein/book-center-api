<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Book;
use App\Models\Author;

class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */

    protected $model = Book::class;

    public function definition()
    {
        return [
            'code' => $this->faker->name(),
            'title' => $this->faker->text(),
            'cover_url' => 'https://source.unsplash.com/random',
            'description'=>$this->faker->text(),
            'price'=>$this->faker->numberBetween(200,3000),
            'published_at'=>now()
        ];
    }
}
