<?php

namespace Database\Factories;

use App\Models\OrganizationUser;
use App\Models\Project;
use App\Models\ProjectUser;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProjectUserFactory extends Factory
{
    protected $model = ProjectUser::class;

    public function definition(): array
    {
        return [
            'project_id' => Project::factory(),
            'organization_user_id' => OrganizationUser::factory(),
            'position' => fake()->optional()->randomElement([
                '部会長',
                '副部会長',
                '書記',
                '会計',
                '担当者',
            ]),
            'joined_at' => now(),
        ];
    }
}
