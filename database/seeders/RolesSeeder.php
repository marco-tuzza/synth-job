<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [
            ['id' => 1, 'role_name' => 'worker'],
            ['id' => 2, 'role_name' => 'company'],
            ['id' => 3, 'role_name' => 'admin'],
        ];
        
        foreach ($roles as $role) {
            Role::create($role);
        }
    }
}
