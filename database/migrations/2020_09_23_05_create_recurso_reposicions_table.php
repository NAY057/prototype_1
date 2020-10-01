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
            $table->bigIncrements('idreposicionrecurso');
            $table->string('radicadosolicitudreprec', 120)->unique()->nullable($value = true);
            $table->dateTime('fechasolicitudreprec', 0)->nullable($value = true);
            $table->bigIncrements('radicadorespuestareprec')->unique()->nullable($value = true)->autoIncrement(false);
            $table->dateTime('fecharespuestareprec', 0)->nullable($value = true);
            $table->string('notificacionreprec', 254)->nullable($value = true);
            $table->string('modificacionreprec', 10)->nullable($value = true);
            $table->integer('nuevoestratoreprec')->nullable($value = true);
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
