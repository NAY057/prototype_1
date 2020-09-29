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
            $table->string('radicadosolicitudrevest', 120)->unique()->nullable($value = true);
            $table->dateTime('fecharadicado', 0)->nullable($value = true);
            $table->bigIncrements('radicadorespuestarevest')->unique()->nullable($value = true)->autoIncrement(false);
            $table->dateTime('fecharespuestarevest', 0)->nullable($value = true);
            $table->string('notificacionrevest', 254)->nullable($value = true);
            $table->string('modificacionrevest', 10)->nullable($value = true);
            $table->integer('nuevoestratorevest')->nullable($value = true);
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
