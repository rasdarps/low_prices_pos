<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $permissions = [
            'role-list',
            'role-create',
            'role-edit',
            'role-delete',
            
            'product-list',
            'product-create',
            'product-edit',
            'product-delete',
            
            'supplier-list',
            'supplier-create',
            'supplier-edit',
            'supplier-delete',
            
            'customer-list',
            'customer-create',
            'customer-edit',
            'customer-delete',
              
            'sales-list',
            'sales-create',
            'sales-update',
            'sales-delete',

            'purchase-list',
            'purchase-create',
            'purchase-update',
            'purchase-delete',

         ];
      
         foreach ($permissions as $permission) {
               
              // Permission::create(['name' => $permission]); 
              //add to exixting seeder use firstOrCreate
              Permission::firstOrCreate(['name' => $permission]); 
         }
    }
}
