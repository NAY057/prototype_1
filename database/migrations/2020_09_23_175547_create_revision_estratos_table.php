<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRevisionEstratosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('revision_estratos', function (Blueprint $table) {
            $table->increments('idrevisionestrato');
            $table->string('radicadosolicitudrevest', 120);
            $table->dateTime('fecharadicado', 0);
            $table->integer('radicadorespuestarevest');
            $table->dateTime('fecharespuestarevest', 0);
            $table->string('notificacionrevest', 255);
            $table->string('modificacionrevest', 10);
            $table->integer('nuevoestratorevest');
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
        Schema::dropIfExists('revision_estratos');
    }
}
