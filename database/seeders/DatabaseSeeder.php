<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use App\Models\User;
use App\Models\Product;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $user = User::factory()->create([
            'name' => 'Brian'
        ]);

        Product::factory(5)->create([
            'user_id' => $user->id
        ]);

        // $merch_cat = Category::create([
        //     'name' => 'Merch',
        //     'slug' => 'merch'
        // ]);

        // $food_cat = Category::create([
        //     'name' => 'Food',
        //     'slug' => 'food'
        // ]);

        // $beverage_cat = Category::create([
        //     'name' => 'Beverage',
        //     'slug' => 'beverage'
        // ]);

        // $user = User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // Product::create([
        //     'user_id' => $user->id,
        //     'category_id' => $merch_cat->id,
        //     'title' => 'The BBT shirt',
        //     'slug' => 'thebbtshirt',
        //     'excerpt' => 'New design shirt!',
        //     'body' => 'One shirt for all occassions.',
        // ]);

        // Product::create([
        //     'user_id' => $user->id,
        //     'category_id' => $food_cat->id,
        //     'title' => 'Pizza',
        //     'slug' => 'pizza',
        //     'excerpt' => 'Pampabusog lusog',
        //     'body' => 'The excellent pizza for everyone!',
        // ]);

        // Product::create([
        //     'user_id' => $user->id,
        //     'category_id' => $beverage_cat->id,
        //     'title' => 'Pocari Sweat',
        //     'slug' => 'pocarisweat',
        //     'excerpt' => 'Ionizing drink!',
        //     'body' => 'This is the sports drink for all kinds of sports.',
        // ]);

    }
}
