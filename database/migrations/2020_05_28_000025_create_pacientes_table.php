<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->increments('idPaciente');
            $table->char('pacIdentificacion', 15);
            $table->string('pacNombre', 50);
            $table->string('pacApellidos', 50);
            $table->date('pacFechaNacimiento');
            $table->enum('pacSexo', ['Femenino', 'Masculino']);
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
