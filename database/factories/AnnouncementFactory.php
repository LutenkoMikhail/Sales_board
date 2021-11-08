<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Config;

class AnnouncementFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $userRoleId = Role::where('name', '=', Config::get('constants.db.roles.user'))->first();

        $userId = User::where('role_id', '=', $userRoleId['id'])->get()->random(1)->first();

        $categoryId = Category::all()->random(1)->first();

        return [
            'title' => $this->faker->sentence(2),
            'content' => $this->faker->realText(100),
            'price' =>   $this->faker->randomFloat(2, 1, 10000),
            'published' => $this->faker->randomElement([false, true]),
            'user_id'=>$userId,
            'category_id'=>$categoryId,
        ];
    }
}


