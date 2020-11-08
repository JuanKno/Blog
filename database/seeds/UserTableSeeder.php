<?php

use App\Models\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();

        User::create([
            'name' => 'admi',
            'password' => bcrypt('123456'),
            'email' => 'admin@admin.com'
        ]);

    }
}
