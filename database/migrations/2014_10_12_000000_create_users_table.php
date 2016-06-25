<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('usuario');
            $table->string('correo')->unique();
            $table->string('backup_pass');
            $table->string('password');
            $table->enum('nivel',['1','2','3','4']);//(1)-ControldeCalidad (2)--jefeDepto (3)-gerenteArea (4)--usuarios
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('users');
    }
}
