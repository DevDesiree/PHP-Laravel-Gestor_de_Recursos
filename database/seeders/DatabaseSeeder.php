<?php
use Illuminate\Database\Seeder;
use App\Models\Resource;
use App\Models\User;
use App\Models\Themes;
use App\Models\ExtraResource;
use App\Models\ResourceType;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        User::factory(20)->create();

        $themeTitles = ['Project Management', 'Functional and Technical Analysis', 'Front-End', 'Back-End', 'Arquitectura', 'QA'];
        foreach ($themeTitles as $title) {
            Themes::factory()->create(['title' => $title]);
        }

        ExtraResource::factory(10)->create();

        $resourceTitles = ['Masterclass', 'Píldora', 'Coding Live', 'Transversal'];
        foreach ($resourceTitles as $title) {
            ResourceType::factory()->create(['titleResource' => $title]);
        }

        Resource::factory(10)->create();
    }
}