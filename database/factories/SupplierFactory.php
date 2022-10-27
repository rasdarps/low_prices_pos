<?php

namespace Database\Factories;

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
            'contact_name' => $this->faker->name(),
            'address' => $this->faker->text(50),
            'city' => $this->faker->city(),
            
        ];
    }
}
