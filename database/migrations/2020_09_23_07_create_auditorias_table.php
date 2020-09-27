<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAuditoriasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('auditorias', function (Blueprint $table) {
            $table->bigIncrements('idauditorias');
            $table->bigIncrements('id_predio')->unsigned()->autoIncrement(false);
            $table->foreign('id_predio')->references('idpredio')->on('predios')->onDelete('cascade')->onUpdate('cascade');
            $table->dateTime('fechamodificacion', 0);
            $table->string('cambio', 254);
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
        Schema::dropIfExists('auditorias');
    }
}
