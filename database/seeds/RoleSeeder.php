<?php

use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('role')->insert([
            'nombre'=>'admin'
        ]);
        DB::table('role')->insert([
            'nombre'=>'cliente'
        ]);
    }
}
