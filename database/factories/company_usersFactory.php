<?php

namespace Database\Factories;

use App\Models\company_users;
use Illuminate\Database\Eloquent\Factories\Factory;

class company_usersFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = company_users::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => random_int(\DB::table('users')->min('id'),\DB::table('users')->max('id')),
            'company_id' => random_int(\DB::table('Companies')->min('id'),\DB::table('Companies')->max('id')),
        ];
    }
}
