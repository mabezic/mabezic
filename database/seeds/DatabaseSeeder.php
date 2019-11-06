<?php

use Illuminate\Database\Seeder;
use App\Entities\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'cpf'        => '11122233345',
            'name'       => 'Jose',
            'phone'      => '84988167906',
            'birth'      => '19880523',
            'gender'     => 'M',
            'notes'      => '',
            'email'      => 'jose@email.com',
            'password'   => env('PASSWORD_HASH') ? bcrypt('123456') : '123456',

        ]);

        // $this->call(UsersTableSeeder::class);
    }
}
