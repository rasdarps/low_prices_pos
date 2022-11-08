<?php

namespace Database\Factories;

use Faker\Provider\PhoneNumber;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Supplier>
 */
class SupplierFactory extends Factory
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
            'supplier_name' => $this->faker->name(),
            'contact' => $this->faker->PhoneNumber('501-###-###'),
            'address' => $this->faker->text(50),
            
            
        ];
    }
}
