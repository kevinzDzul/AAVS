<?php

use Illuminate\Database\Seeder;

class UsuariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'usuario' => 'kevin',
            'correo' => 'kevin'.'@gmail.com',
            'backup_pass'=>'123',
            'password' => bcrypt('123'),
            'nivel'=>'2',
        ]);
    }
}
