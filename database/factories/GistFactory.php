<?php

namespace Database\Factories;

use App\Models\Gist;
use Illuminate\Database\Eloquent\Factories\Factory;

class GistFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Gist::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
	  'title' => $this->faker->name,
	  'description' => $this->faker->sentence,
	  'body' => $this->faker->paragraph,
          'slug' => $this->faker->slug
        ];
    }
}
