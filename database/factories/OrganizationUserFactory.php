<?php

namespace Database\Factories;

use App\Models\Organization;
use App\Models\OrganizationUser;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class OrganizationUserFactory extends Factory
{
    protected $model = OrganizationUser::class;

    public function definition(): array
    {
        return [
            'organization_id' => Organization::factory(),
            'user_id' => User::factory(),
            'role' => fake()->randomElement([
                'owner',
                'admin',
                'member',
            ]),
            'joined_at' => now(),
        ];
    }

    public function owner(): static
    {
        return $this->state(fn() => [
            'role' => 'owner',
        ]);
    }

    public function admin(): static
    {
        return $this->state(fn() => [
            'role' => 'admin',
        ]);
    }

    public function member(): static
    {
        return $this->state(fn() => [
            'role' => 'member',
        ]);
    }
}
