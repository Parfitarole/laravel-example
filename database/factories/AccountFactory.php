<?php

namespace Database\Factories;

use App\Models\Account;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;

class AccountFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Account::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'email'      => $this->faker->unique()->safeEmail(),
            'username'   => $this->faker->unique()->userName(),
            'password'   => Hash::make($this->faker->unique()->password()),
            'created_at' => $this->faker->unique()->dateTimeThisDecade()
        ];
    }
}
