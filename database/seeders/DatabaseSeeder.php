<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Tag;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RoleSeeder::class);

        $this->call(UserSeeder::class);

        Storage::deleteDirectory('posts');
        Storage::makeDirectory('posts');

        Category::factory(10)->create();
        Tag::factory(20)->create();
        $this->call(PostSeeder::class);
    }
}
