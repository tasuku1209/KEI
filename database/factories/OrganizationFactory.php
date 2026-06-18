<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class OrganizationFactory extends Factory
{
    public function definition(): array
    {
        return [
            'name' => fake()->randomElement([
                '子ども会',
                '老人会',
                '夏祭り実行委員会',
                '防災委員会',
                '計画策定委員会',
            ]),

            'description' => fake()->optional()->sentence(),
        ];
    }
}
