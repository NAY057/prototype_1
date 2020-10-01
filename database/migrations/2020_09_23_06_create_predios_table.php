<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrediosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('predios', function (Blueprint $table) {
            $table->bigIncrements('idpredio');

            $table->bigIncrements('id_empresa')->unsigned()->autoIncrement(false)->nullable($value = true);
            $table->foreign('id_empresa')->references('idempresa')->on('empresas')->onDelete('cascade')->onUpdate('cascade');

            $table->bigIncrements('id_revisionestrato')->unsigned()->autoIncrement(false)->nullable($value = true);
            $table->foreign('id_revisionestrato')->references('idrevisionestrato')->on('revision_estratos')->onDelete('cascade')->onUpdate('cascade');

            $table->bigIncrements('id_propietario')->unsigned()->autoIncrement(false)->nullable($value = false);
            $table->foreign('id_propietario')->references('idpropietario')->on('propietarios')->onDelete('cascade')->onUpdate('cascade');
            
            $table->bigIncrements('id_recursoreposicion')->unsigned()->autoIncrement(false)->nullable($value = true);
            $table->foreign('id_recursoreposicion')->references('idrecursoreposicion')->on('recurso_reposicions')->onDelete('cascade')->onUpdate('cascade');
            
            $table->bigIncrements('id_subsidioapelacion')->unsigned()->autoIncrement(false)->nullable($value = true);
            $table->foreign('id_subsidioapelacion')->references('idsubsidioapelacion')->on('apelacion_subcidios')->onDelete('cascade')->onUpdate('cascade');
            
            $table->bigIncrements('id_user')->unsigned()->autoIncrement(false)->nullable($value = false);
            $table->foreign('id_user')->references('iduser')->on('users')->onDelete('cascade')->onUpdate('cascade');

            $table->bigIncrements('codpredial')->nullable($value = false)->autoIncrement(false);
            $table->bigIncrements('matricula')->unique()->nullable($value = false)->autoIncrement(false);
            $table->string('tipopredio')->length(30)->nullable($value = false);
            $table->string('destinoeconomico')->length(45)->nullable($value = false);
            $table->string('areaterreno')->length(10)->nullable($value = true);
            $table->double('areaedificada', 6, 2)->nullable($value = true);
            $table->double('avaluopredio', 12, 2)->nullable($value = true);
            $table->string('clase')->length(30)->nullable($value = true);
            $table->string('direccion')->length(120)->nullable($value = false);
            $table->string('barriovereda')->length(50)->nullable($value = false);
            $table->string('comuna')->length(50)->nullable($value = false);
            $table->string('latitud')->length(45)->nullable($value = true);
            $table->string('longitud')->length(40)->nullable($value = true);
            $table->string('uso')->length(45)->nullable($value = false);
            $table->integer('estratoactual')->nullable($value = false);
            $table->string('observaciones')->length(250);
            $table->dateTime('fecha', 0)->nullable($value = false);
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
        Schema::dropIfExists('predios');
    }
}
