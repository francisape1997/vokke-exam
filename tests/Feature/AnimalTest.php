<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

use App\Models\Animal;

use App\Enums\GenderEnum;
use App\Enums\FriendlinessEnum;

class AnimalTest extends TestCase
{
    use RefreshDatabase, WithFaker;

    public function test_get_all_animals()
    {
        Animal::factory()->count(15)->create();

        $this->getJson(route('animal.index'))->assertStatus(200);
    }

    public function test_create_animal()
    {
        $this->postJson(route('animal.store'), [
            'name' => $this->faker->unique()->name,
            'nickname' => $this->faker->name,
            'weight' => $this->faker->randomFloat(2, 1, 300),
            'height' => $this->faker->randomFloat(2, 1, 300),
            'gender' => GenderEnum::toArrayNames()[array_rand(GenderEnum::toArrayNames())],
            'color' => $this->faker->colorName,
            'friendliness' => FriendlinessEnum::toArrayNames()[array_rand(FriendlinessEnum::toArrayNames())],
            'date_of_birth' => $this->faker->date(),
        ])
        ->assertStatus(201);
    }

    public function test_update_animal()
    {
        $animal = Animal::factory()->create();

        $this->putJson(route('animal.update', ['animal' => $animal->id]), [
            'name' => $this->faker->unique()->name,
            'nickname' => $this->faker->name,
            'weight' => $this->faker->randomFloat(2, 1, 300),
            'height' => $this->faker->randomFloat(2, 1, 300),
            'gender' => GenderEnum::toArrayNames()[array_rand(GenderEnum::toArrayNames())],
            'color' => $this->faker->colorName,
            'friendliness' => FriendlinessEnum::toArrayNames()[array_rand(FriendlinessEnum::toArrayNames())],
            'date_of_birth' => $this->faker->date(),
        ])->assertStatus(200);
    }
}
