<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            //
            'name' => $this->faker->name(),
            'cat_id' => $this->faker->bigInt(),
            'unit_id' => $this->faker->bigInt(),
            'stock_quantity' => $this->faker->float(),
            'price' => $this->faker->float(),
            're-order' => $this->faker->float(),
        ];
    }
}
