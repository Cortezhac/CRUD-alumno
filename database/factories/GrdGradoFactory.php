<?php

namespace Database\Factories;

use App\Models\Grd_grado;
use Illuminate\Database\Eloquent\Factories\Factory;

class GrdGradoFactory extends Factory
{
    protected $model = Grd_grado::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'grd_nomnbre' => $this->faker->numberBetween(1,9)
        ];
    }
}
