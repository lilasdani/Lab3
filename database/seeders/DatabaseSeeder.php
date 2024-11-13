<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use App\Models\Tag;
use App\Models\Task;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Creează 4 categorii, fiecare având 3 sarcini asociate
        Category::factory(4)
            ->has(Task::factory()->count(3))
            ->create();

        // Creează 10 etichete
        Tag::factory(10)->create();
    }
}
