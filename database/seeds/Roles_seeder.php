<?php

use Illuminate\Database\Seeder;

class Roles_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([ 'descripcion' => 'admin']);
        /* DB::table('roles')->insert([ 'descripcion' => 'usuario']); */

    }
}
