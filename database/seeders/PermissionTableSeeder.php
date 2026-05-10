<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
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
            'role-list','role-create','role-edit','role-delete',
            'unit-list','unit-create','unit-edit','unit-delete',
            'category-list','category-create','category-edit','category-delete',
            'user-list','user-create', 'user-edit','user-delete',
         ];
      
         foreach ($permissions as $permission) {
               
              //Permission::create(['name' => $permission]); 
              //add to exixting seeder use firstOrCreate
              Permission::firstOrCreate(['name' => $permission]); 
         }


          //Products Management Permissions
        $products_management_permissions = [
            'product-list','product-create','product-edit','product-delete',
            
        ];

         // Create products management permissions in the database if they don't already exist
        foreach ($products_management_permissions as $product_permission) {
            Permission::firstOrCreate(['name' => $product_permission]);
        }


        $supplier_management_permissions = [
            'supplier-list','supplier-create','supplier-edit','supplier-delete',
           
        ];


        // Create supplier management permissions in the database if they don't already exist
        foreach ($supplier_management_permissions as $supplier_permission) {
            Permission::firstOrCreate(['name' => $supplier_permission]);
        }

        $customers_management_permissions = [ 
            'customer-list','customer-create','customer-edit','customer-delete',
           
        ];


        // Create customer management permissions in the database if they don't already exist
        foreach ($customers_management_permissions as $customer_permission) {
            Permission::firstOrCreate(['name' => $customer_permission]);
        }

         $transactions_management_permissions = [ 
            'invoice-list','invoice-create','invoice-edit','invoice-delete',   
            'sales-list','sales-create','sales-edit','sales-delete',
            'purchase-list','purchase-create','purchase-edit','purchase-delete',
        ];


        // Create transactions management permissions in the database if they don't already exist
        foreach ($transactions_management_permissions as $transaction_permission) {
            Permission::firstOrCreate(['name' => $transaction_permission]);
        }

        // Find or retrieve the Super Admin role (must exist)
        $role = Role::findByName('Super Admin');
        
        // Create Manager role if it doesn't exist, or retrieve it if it does
        $manager_role = Role::firstOrCreate(['name' => 'Manager']);


         // Assign products permissions to Super Admin and Manager roles
        foreach ($products_management_permissions as $product_permission) {
            // Check if Super Admin doesn't have the permission, then assign it
            if (!$role->hasPermissionTo($product_permission)) {
                $role->givePermissionTo($product_permission);
            }
            // Check if Manager doesn't have the permission, then assign it
            if (!$manager_role->hasPermissionTo($product_permission)) {
                $manager_role->givePermissionTo($product_permission);
            }
        }


          // Assign suppliers permissions to Super Admin and Manager roles
        foreach ($supplier_management_permissions as $supplier_permission) {
            // Check if Super Admin doesn't have the permission, then assign it
            if (!$role->hasPermissionTo($supplier_permission)) {
                $role->givePermissionTo($supplier_permission);
            }

            // Check if Manager doesn't have the permission, then assign it
            if (!$manager_role->hasPermissionTo($supplier_permission)) {
                $manager_role->givePermissionTo($supplier_permission);
            }
           
        }


           // Assign customers permissions to Super Admin and Manager roles
        foreach ($customers_management_permissions as $customer_permission) {
            // Check if Super Admin doesn't have the permission, then assign it
            if (!$role->hasPermissionTo($customer_permission)) {
                $role->givePermissionTo($customer_permission);
            }
            // Check if Manager doesn't have the permission, then assign it
            if (!$manager_role->hasPermissionTo($customer_permission)) {
                $manager_role->givePermissionTo($customer_permission);
            }

        }

        
           // Assign transactions permissions to Super Admin and Manager roles
        foreach ($transactions_management_permissions as $transaction_permission) {
            // Check if Super Admin doesn't have the permission, then assign it
            if (!$role->hasPermissionTo($transaction_permission)) {
                $role->givePermissionTo($transaction_permission);
            }
            // Check if Manager doesn't have the permission, then assign it
            if (!$manager_role->hasPermissionTo($transaction_permission)) {
                $manager_role->givePermissionTo($transaction_permission);
            }
        }


         // Assign basic permissions to Super Admin role only
         foreach ($permissions as $permission) {

            // Check if Super Admin doesn't have the permission, then assign it
            if (!$role->hasPermissionTo($permission)) {
                $role->givePermissionTo($permission);
            }
          
        }



    }
}
