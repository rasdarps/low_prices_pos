<?php

namespace Database\Seeders;

use App\Models\Unit;
use Illuminate\Database\Seeder;

class UnitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
         $units = array(
            array('id' => 1, 'name' => 'pieces', 'created_at' => now()),
            array('id' => 2, 'name' => 'boxes', 'created_at' => now()),
            array('id' => 3, 'name' => 'bundles', 'created_at' => now()),
            array('id' => 4, 'name' => 'liters', 'created_at' => now()),
            array('id' => 5, 'name' => 'kilograms', 'created_at' => now()),
            array('id' => 6, 'name' => 'meters', 'created_at' => now()),
           

        );

        foreach ($units as $unit) {
            Unit::updateOrCreate(
                ['id' => $unit['id']],
                [
                    'name' => $unit['name'],
                    'created_at' => now(),
                    'created_by' => 1,
                ]
            );
        }
    }
}
