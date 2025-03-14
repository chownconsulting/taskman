<?php

namespace Database\Seeders;

use App\Models\Task;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Jon Morby',
            'email' => 'jon@redmail.com',
            'password' => 'password',
            'email_verified_at' => now(),
            'is_admin' => true,
        ]);

        Task::factory()->count(10)->create();
    }
}
