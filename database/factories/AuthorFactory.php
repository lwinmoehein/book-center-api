<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Author;

class AuthorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = Author::class;

    
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'photo_url' => $this->faker->text(),
            'about' => $this->faker->text(),
        ];
    }
}
