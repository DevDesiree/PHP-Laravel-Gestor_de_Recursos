<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Resource;
use App\Models\User;
use App\Models\Themes;
use App\Models\ExtraResource;
use App\Models\ResourceType;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
       User::factory(20)->create();
       Themes::factory(10)->create();
       ExtraResource::factory(10)->create();
       ResourceType::factory(10)->create();
       Resource::factory(10)->create();
    }
}