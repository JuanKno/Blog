<?php

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Admin User',
            'password' => bcrypt('123456'),
            'email' => 'admin@admin.com'
        ]);

        factory(User::class, 50)->create();

    }
}
