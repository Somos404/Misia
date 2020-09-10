<?php

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
        DB::table('users')->insert([
            'name' => Str::random(10),
            'lastname' => Str::random(10),
            'dni' => Str::random(9),
            'email' => 'test@test',
            'password' => Hash::make('secret'),
            'role_id' => 1,
        ]);
    }
}
