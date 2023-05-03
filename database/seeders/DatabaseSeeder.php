<?php

namespace Database\Seeders;

use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        $user = User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@example.com',
        ]);

        User::factory()->create([
            'name' => 'Test',
            'email' => 'test@example.com',
        ]);

        $role = Role::create(['name' => 'Admin']); // Create a new role
        $user->assignRole($role); // Assign role to user instance (Admin)
    }
}
