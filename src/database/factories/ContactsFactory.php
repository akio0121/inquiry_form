<?php

namespace Database\Factories;

use App\Models\Contacts;
use Illuminate\Database\Eloquent\Factories\Factory;

class ContactsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'first_name' => $this->faker->first_name,
            'last_name' => $this->faker->last_name,
            'gender' => $this->faker->gender,
            'email' => $this->faker->email,
            'tel' => $this->faker->tel,
            'address' => $this->faker->address,
            'building' => $this->faker->building,
            'detail' => $this->faker->detail
        ];
    }
}
