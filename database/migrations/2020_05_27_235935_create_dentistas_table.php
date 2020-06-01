<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDentistasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dentistas', function (Blueprint $table) {
            $table->id('idDentista');
            $table->char('denIdentificacion', 15);
            $table->string('denNombres', 50);
            $table->string('denApellidos', 50);
            $table->string('denEspecialidad', 50);
            $table->char('denTelefono', 15);
            $table->string('denCorreo', 50);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dentistas');
    }
}
