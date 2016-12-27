<?php

use Illuminate\Support\Facades\Schema;
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
            $table->string('nombre');
            $table->string('rut');
            $table->string('email')->unique();
            $table->integer('edad');
            $table->integer('telefono');
            $table->string('direccion');
            $table->date('fecha_nacimiento');
            $table->string('genero');
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
            $table->integer('idroles')->unsigned();
            
            $table->foreign('idroles')->references('id')->on('roles');
            
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
