<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory {
	/**
	 * The name of the factory's corresponding model.
	 *
	 * @var string
	 */
	protected $model = User::class;

	/**
	 * Define the model's default state.
	 *
	 * @return array
	 */
	public function definition() {
		return [
			'first_name' => $this->faker->firstName,
			'last_name' => $this->faker->lastName,
			'email' => $this->faker->unique()->safeEmail,
			'created_at' => $this->faker->dateTimeBetween('-10 years','-5 years'),
			'updated_at' => $this->faker->dateTimeBetween('-4 years','-1 years'),
		];
	}
}
