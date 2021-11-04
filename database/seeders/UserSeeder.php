<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::factory()
            ->count(9)
            ->create();
        $this->command->info('User(User) table loaded with data!');

        $admin = User::orderBy('id', )->first();
        $roleId = Role::where('name', '=', Config::get('constants.db.roles.admin'))->first();

        $admin->role_id = $roleId['id'];
        $admin->email = 'admin@admin.com';

        $admin->save();
        $this->command->info('User(Admin) table loaded with data!');
    }
}
