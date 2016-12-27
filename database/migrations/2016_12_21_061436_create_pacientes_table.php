<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePacientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pacientes', function (Blueprint $table) {
            $table->increments('id');
            $table->enum('estado',['activo','inactivo'])->default('activo');
            $table->enum('tipo_atencion',['Domicilio','Trabajo','Consulta']);
            $table->text('antecedentes_sociales');
            $table->timestamps();

            $table->integer('id_usuario')->unsigned();
            $table->integer('id_empresa')->unsigned();
            $table->integer('id_plan')->unsigned();
            $table->integer('id_tiposangre')->unsigned();
            $table->integer('id_prevision')->unsigned();


            $table->foreign('id_usuario')->references('id')->on('users');
            $table->foreign('id_empresa')->references('id')->on('empresas');
            $table->foreign('id_plan')->references('id')->on('planes');
            $table->foreign('id_tiposangre')->references('id')->on('tiposangres');
            $table->foreign('id_prevision')->references('id')->on('previsiones');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pacientes');
    }
}
