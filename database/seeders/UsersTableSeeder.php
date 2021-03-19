<?php

namespace Database\Seeders;

use App\Models\Users;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create("tr_TR");

        for ($i=0; $i < 50; $i++) { 
            Users::create([
                'name' => $faker->name,
                'email' => $faker->email,
                'password' => $faker->password,
                'weight' => rand(65,120),
                'height' => rand(150,202),
                'avatar' => 'https://picsum.photos/200'
            ]);
        }
    }
}
