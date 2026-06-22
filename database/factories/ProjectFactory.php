<?php

namespace Database\Factories;

use App\Models\Organization;
use App\Models\Project;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProjectFactory extends Factory
{
    protected $model = Project::class;

    public function definition(): array
    {
        return [
            'organization_id' => Organization::factory(),
            'name' => fake()->randomElement([
                '夏祭り',
                '送る会',
                '広報部会',
                '防災部会',
                'イベント企画',
            ]),
            'description' => fake()->optional()->sentence(),
        ];
    }
}
