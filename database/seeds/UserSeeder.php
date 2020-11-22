<?php

use App\Models\User;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        User::create([
            'name' => 'Admin User',
            'password' => bcrypt('123456'),
            'email' => 'admin@admin.com',
            'biography' => $faker->text(400),
        ]);

        factory(User::class, 50)->create();

    }
}
