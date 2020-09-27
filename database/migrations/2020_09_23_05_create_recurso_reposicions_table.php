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
            $table->string('radicadosolicitudrecrep', 120);
            $table->dateTime('fechasolicitudrecrep', 0);
            $table->integer('radicadorespuestarecrep');
            $table->dateTime('fecharespuestarecrep', 0);
            $table->string('notificacionrecrep', 254);
            $table->string('modificacionrecrep', 10);
            $table->integer('nuevoestratorecrep');
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
