<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Enums\GenderEnum;
use App\Enums\FriendlinessEnum;
use App\Enums\AnimalTypeEnum;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Animal>
 */
class AnimalFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->unique()->name,
            'nickname' => $this->faker->name,
            'weight' => $this->faker->randomFloat(2, 1, 300),
            'height' => $this->faker->randomFloat(2, 1, 300),
            'gender' => rand(min(GenderEnum::toArrayValues()), max(GenderEnum::toArrayValues())),
            'color' => $this->faker->colorName,
            'friendliness' => rand(min(FriendlinessEnum::toArrayValues()), max(FriendlinessEnum::toArrayValues())),
            'date_of_birth' => $this->faker->date(),
            'type' => AnimalTypeEnum::KANGAROO->value,
        ];
    }
}
