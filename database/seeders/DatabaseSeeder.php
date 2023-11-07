<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(10)->create();

        // Category::create([
        //     'name' => 'Merch',
        //     'slug' => 'merch'
        // ]);

        // Category::create([
        //     'name' => 'Food',
        //     'slug' => 'food'
        // ]);

        // Category::create([
        //     'name' => 'Beverage',
        //     'slug' => 'beverage'
        // ]);

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

    }
}
