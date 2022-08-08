<?php

namespace Database\Seeders;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(1)->create();

        User::create([
            'name' => 'A. Muh. Afrial Ivan Pratama',
            'email' => 'afrialivan0@gmail.com',
            'password' => bcrypt(111)
        ]);

    }
}
