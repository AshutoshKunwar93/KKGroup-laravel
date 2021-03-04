<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'image' => 'img.jpg',
            'price' => random_int(100, 5000),
            'details' => $this->faker->paragraph,
            'availability' => random_int(1, 10),
            'rating' => random_int(1, 5),
            'company_id' => random_int(1, 10),
        ];
    }
}
