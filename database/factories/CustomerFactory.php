<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Customer>
 */
class CustomerFactory extends Factory
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
            'customer_name' => $this->faker->name(),
            'contact' => $this->faker->number(min:10, max:10),
            'address' => $this->faker->text(50),
            
            
        ];
    }
}
