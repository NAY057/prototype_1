<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpresasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empresas', function (Blueprint $table) {
            $table->bigIncrements('idempresa');
            $table->integer('productoceo')->unique()->nullable($value = false);
            $table->integer('matriculaacueducto')->unique()->nullable($value = false);
            $table->integer('matriculacantarillado')->unique()->nullable($value = false);
            $table->integer('contratourbaser')->unique()->nullable($value = false);
            $table->integer('codigousuarioalcanos')->unique()->nullable($value = false);
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
        Schema::dropIfExists('empresas');
    }
}
