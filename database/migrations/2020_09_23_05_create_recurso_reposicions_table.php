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
            $table->string('radicadosolicitudrecrep', 120)->unique()->nullable($value = true);
            $table->dateTime('fechasolicitudrecrep', 0)->nullable($value = true);
            $table->bigIncrements('radicadorespuestarecrep')->unique()->nullable($value = true)->autoIncrement(false);
            $table->dateTime('fecharespuestarecrep', 0)->nullable($value = true);
            $table->string('notificacionrecrep', 254)->nullable($value = true);
            $table->string('modificacionrecrep', 10)->nullable($value = true);
            $table->integer('nuevoestratorecrep')->nullable($value = true);
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
