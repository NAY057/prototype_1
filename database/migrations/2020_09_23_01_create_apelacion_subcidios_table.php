<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApelacionSubcidiosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('apelacion_subcidios', function (Blueprint $table) {
            $table->bigIncrements('idapelacionsubsidio');
            $table->string('apelacionsubsidio', 120)->unique()->nullable($value = true);
            $table->bigIncrements('remisorio')->unique()->nullable($value = true)->autoIncrement(false);
            $table->dateTime('fechaoficioremisorio', 0)->nullable($value = true);
            $table->string('notificacionapesub', 254)->nullable($value = true);
            $table->string('modificacionapesub', 45)->nullable($value = true);
            $table->integer('estratoapesub')->nullable($value = true);
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
        Schema::dropIfExists('apelacion_subcidios');
    }
}
