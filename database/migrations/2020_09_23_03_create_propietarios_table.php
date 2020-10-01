<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropietariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('propietarios', function (Blueprint $table) {
            $table->bigIncrements('idpropietario');
            $table->bigIncrements('numerodocumento')->nullable($value = false)->autoIncrement(false);
            $table->string('nombre', 50)->nullable($value = false);
            $table->string('telefono', 15)->nullable($value = true);
            $table->string('correoelectronico', 130)->nullable($value = true);
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
        Schema::dropIfExists('propietarios');
    }
}
