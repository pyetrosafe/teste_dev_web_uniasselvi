<?php

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
        //
        DB::table('users')->insert([
            'name' => 'Emmerson',
            'email' => 'emmerson.becker@uniasselvi.com.br',
            'password' => bcrypt('123456'),
            'admin' => true,
            'created_at' => 'now()',
            'email_verified_at' => 'now()',
        ]);

        DB::table('users')->insert([
            'name' => 'Décio',
            'email' => 'decio.lehmkuhl@uniasselvi.com.br',
            'password' => bcrypt('123456'),
            'admin' => false,
            'created_at' => 'now()',
            'email_verified_at' => 'now()',
        ]);

        DB::table('users')->insert([
            'name' => 'Pyetro',
            'email' => 'pyetrosafe@gmail.com',
            'password' => bcrypt('123456'),
            'admin' => false,
            'created_at' => 'now()',
            'email_verified_at' => 'now()',
        ]);
    }
}
