<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Report>
 */
class ReportFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'order' => $this->faker->randomDigit(),
            'energy_type' =>(rand(0,1) == 1)?"Тепло":"Электричество",
            'name' => $this->faker->words($nb = 7, $asText = true)  ,
            'file' => "#"
        ];
    }
}
