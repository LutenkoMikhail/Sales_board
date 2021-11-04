<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            'name' =>Config::get('constants.db.roles.admin'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        $this->command->info('Role (Admin) table loaded with data!');

        Role::factory()
            ->count(1)
            ->create();
        $this->command->info('Role (User) table loaded with data!');
    }
}
