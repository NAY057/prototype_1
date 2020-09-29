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
            $table->bigIncrements('idrevisionestrato');
            $table->string('radicadosolicitudrevest', 120)->unique()->nullable($value = false);
            $table->dateTime('fecharadicado', 0)->nullable($value = false);
            $table->integer('radicadorespuestarevest')->unique()->nullable($value = false);
            $table->dateTime('fecharespuestarevest', 0)->nullable($value = false);
            $table->string('notificacionrevest', 254)->nullable($value = false);
            $table->string('modificacionrevest', 10)->nullable($value = false);
            $table->integer('nuevoestratorevest')->nullable($value = false);
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
