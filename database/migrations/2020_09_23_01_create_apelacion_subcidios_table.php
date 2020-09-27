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
            $table->string('subsidioapelacion', 120);
            $table->integer('remisorio');
            $table->dateTime('fechaoficioremisorio', 0);
            $table->string('notificacionofirem', 254);
            $table->string('modificacionsubape', 45);
            $table->integer('nuevoestratosubape');
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
