<?php

namespace Database\Factories;

use App\Models\Review;
use Illuminate\Database\Eloquent\Factories\Factory;

class ReviewFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = Review::class;

    public function definition()
    {
        return [
            'book_id'=>$this->faker->numberBetween(1,30),
            'user_id'=>$this->faker->numberBetween(1,20),
            'body'=>$this->faker->text(),
            'star'=>$this->faker->numberBetween(1,5)
        ];
    }
}
