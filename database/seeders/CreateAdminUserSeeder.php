<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class CreateAdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        // Find or create the Super Admin role
        $role = Role::firstOrCreate(['name' => 'Super Admin']);

        // Find or create the admin user
        $user = User::firstOrCreate(
            ['email' => 'admin@gmail.com'],
            [
                'name' => 'Kwaku Darpah',
                'username' => 'rasdarps',
                'phone' => '0242222874',
                'password' => bcrypt('juliana@1985'),
                'user_type' => 'Super Admin',
                'created_by' => 1
            ]
        );

        // Assign all permissions to the Super Admin role
        $permissions = Permission::pluck('id','id')->all();
        $role->syncPermissions($permissions);

        // Assign the Super Admin role to the user if not already assigned
        if (!$user->hasRole($role->name)) {
            $user->assignRole($role->name);
        }
        
    }
}
