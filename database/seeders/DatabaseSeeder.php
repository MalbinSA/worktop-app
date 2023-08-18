<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Category;
use App\Models\Flag;
use App\Models\Pin;
use App\Models\Transaction;
use App\Models\Wish;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
        Flag::factory(4)->create();
        Pin::factory(20)->create();
        Wish::factory(20)->create();
        Category::factory(5)->create();
        Transaction::factory(50)->create();

        // \App\Models\User::factory(10)->create();

    }
}
