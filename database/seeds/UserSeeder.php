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
            'email' => 'admin@admin.com',
            'biography' =>'Alias necessitatibus sapiente molestias delectus in. Asperiores eum at magni est aliquam cupiditate reprehenderit totam. In hic omnis accusamus magnam sed. Perspiciatis alias libero maiores quis. Et eaque dolorem dolor eveniet exercitationem. Libero repellat consectetur ut labore molestiae.',
        ]);

        factory(User::class, 50)->create();

    }
}
