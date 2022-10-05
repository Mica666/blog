<?php

namespace Database\Seeders;

use Database\Factories\UserFactory;
use Illuminate\Database\Seeder;

class userseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        user::create([
                'name'=> 'mica',
                'mail'=>'mica06@gmail.com',
                'password'=>bcrypt('12345678')
            ]);
        user::factory(99)->create();

    }
}
