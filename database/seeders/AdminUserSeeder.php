<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'habiba',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('123456'),
            'is_admin'=>'1',
        ]);
    }
}
