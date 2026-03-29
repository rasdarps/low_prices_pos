<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        $user = User::create([
            'name' => 'Kwaku Darpah',
            'username' => 'rasdarps', 
            'email' => 'admin@gmail.com',
            'phone' => '0242222874',  // Add phone number
            'password' => bcrypt('juliana@1985'),
            'user_type' => 'Super Admin',
            'created_by' => 1  // Since this is the first admin user, set to 1 or null
        ]);
    
        //creating roles in spatie
        $role = Role::create(['name' => 'Super Admin']); 

        //adding all roles to a user using pluck which will extract a particular data from a collection
        $permissions = Permission::pluck('id','id')->all(); 
   
        //synching multiple permissions to a role
        $role->syncPermissions($permissions);
     
        //assigning roles to a user
        // $user->assignRole([$role->id]);

        // 6. Assign the Admin role to the user
        if (!$user->hasRole($role->name)) {
            $user->assignRole($role->name);
        }
        
    }
}
