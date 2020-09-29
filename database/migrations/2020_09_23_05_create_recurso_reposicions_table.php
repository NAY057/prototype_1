<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecursoReposicionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recurso_reposicions', function (Blueprint $table) {
            $table->bigIncrements('idrecursoreposicion');
            $table->string('radicadosolicitudrecrep', 120)->unique()->nullable($value = false);
            $table->dateTime('fechasolicitudrecrep', 0)->nullable($value = false);
            $table->integer('radicadorespuestarecrep')->unique()->nullable($value = false);
            $table->dateTime('fecharespuestarecrep', 0)->nullable($value = false);
            $table->string('notificacionrecrep', 254)->nullable($value = false);
            $table->string('modificacionrecrep', 10)->nullable($value = false);
            $table->integer('nuevoestratorecrep')->nullable($value = false);
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
        Schema::dropIfExists('recurso_reposicions');
    }
}
