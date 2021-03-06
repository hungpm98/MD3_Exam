<?php

namespace Database\Factories;

use App\Models\Status;
use Illuminate\Database\Eloquent\Factories\Factory;

class DealerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'code'=>rand(100,999),
            'name'=>$this->faker->name(),
            'phone'=>$this->faker->phoneNumber(),
            'email'=>$this->faker->unique()->safeEmail(),
            'address'=>$this->faker->address(),
            'managerName'=>$this->faker->name(),
            'status_id'=>Status::all()->random()->id
        ];
    }
}
