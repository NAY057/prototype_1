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
            $table->bigIncrements('productoceo')->unique()->nullable($value = true)->autoIncrement(false);
            $table->bigIncrements('matriculaacueducto')->unique()->nullable($value = true)->autoIncrement(false);
            $table->bigIncrements('matriculaalcantarillado')->unique()->nullable($value = true)->autoIncrement(false);
            $table->bigIncrements('contratourbaser')->unique()->nullable($value = true)->autoIncrement(false);
            $table->bigIncrements('codigousuarioalcanos')->unique()->nullable($value = true)->autoIncrement(false);
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
