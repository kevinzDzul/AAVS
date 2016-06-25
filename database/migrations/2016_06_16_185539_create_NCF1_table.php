<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNCF1Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('NCF',function(Blueprint $table)
            {
                $table->increments('id');
                $table->string('numNCF');
                $table->string('fecha');
                $table->integer('id_elaboro');
                ///$table->integer('departamento');
                $table->string('responsable');
                $table->string('descripcion');

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
