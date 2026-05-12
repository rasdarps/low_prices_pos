<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
         $categories = array(
            array('id' => 1, 'name' => 'Laptops', 'created_at' => now()),
            array('id' => 2, 'name' => 'Phones', 'created_at' => now()),
            array('id' => 3, 'name' => 'Stationary', 'created_at' => now()),
            array('id' => 4, 'name' => 'Drinks', 'created_at' => now()),
            array('id' => 5, 'name' => 'Food', 'created_at' => now()),
            array('id' => 6, 'name' => 'Clothing', 'created_at' => now()),
            array('id' => 7, 'name' => 'Footwear', 'created_at' => now()),
            array('id' => 8, 'name' => 'Accessories', 'created_at' => now()),
            array('id' => 9, 'name' => 'Home Appliances', 'created_at' => now()),

        );

        foreach ($categories as $category) {
            Category::updateOrCreate(
                ['id' => $category['id']],
                [
                    'name' => $category['name'],
                    'created_at' => now(),
                    'created_by' => 1,
                ]
            );
        }
    }
}
