<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\idea>
 */
class ideaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'description' => Str::random(30),
            'image' => Str::random(10),
            'vd'=>Str::random(10),
            'prixB'=>'600',
            'prixR'=>'200',
            'prixS'=>'400',
            'user'=>'2',
            'categorie'=>'1',
            'type'=>'0',
            ];
    }
}
