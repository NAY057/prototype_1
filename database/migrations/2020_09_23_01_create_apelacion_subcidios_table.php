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
            $table->bigIncrements('idsubsidioapelacion');
            $table->string('subsidioapelacion', 120)->unique()->nullable($value = false);
            $table->integer('remisorio')->unique()->nullable($value = false);
            $table->dateTime('fechaoficioremisorio', 0)->nullable($value = false);
            $table->string('notificacionofirem', 254)->nullable($value = false);
            $table->string('modificacionsubape', 45)->nullable($value = false);
            $table->integer('nuevoestratosubape')->nullable($value = false);
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
