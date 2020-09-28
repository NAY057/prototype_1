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

            $table->bigIncrements('id_empresa')->unsigned()->autoIncrement(false);
            $table->foreign('id_empresa')->references('idempresa')->on('empresas')->onDelete('cascade')->onUpdate('cascade');

            $table->bigIncrements('id_revisionestrato')->unsigned()->autoIncrement(false);
            $table->foreign('id_revisionestrato')->references('idrevisionestrato')->on('revision_estratos')->onDelete('cascade')->onUpdate('cascade');
            
            $table->bigIncrements('id_propietario')->unsigned()->autoIncrement(false);
            $table->foreign('id_propietario')->references('idpropietario')->on('propietarios')->onDelete('cascade')->onUpdate('cascade');
            
            $table->bigIncrements('id_recursoreposicion')->unsigned()->autoIncrement(false);
            $table->foreign('id_recursoreposicion')->references('idrecursoreposicion')->on('recurso_reposicions')->onDelete('cascade')->onUpdate('cascade');
            
            $table->bigIncrements('id_subsidioapelacion')->unsigned()->autoIncrement(false);
            $table->foreign('id_subsidioapelacion')->references('idsubsidioapelacion')->on('apelacion_subcidios')->onDelete('cascade')->onUpdate('cascade');
            
            $table->integer('codpredial')->length(30)->nullable($value = false);
            $table->integer('matricula')->nullable($value = false);
            $table->string('tipopredio')->length(30)->nullable($value = false);
            $table->string('destinoeconomico')->length(45)->nullable($value = false);
            $table->string('areaterreno')->length(10)->nullable($value = false);
            $table->double('areaedificada', 6, 2)->nullable($value = false);
            $table->double('avaluopredio', 10, 2);
            $table->string('clase')->length(30);
            $table->string('direccion')->length(120)->nullable($value = false);
            $table->string('barriovereda')->length(50)->nullable($value = false);
            $table->string('comuna')->length(50)->nullable($value = false);
            $table->string('latitud')->length(45);
            $table->string('longitud')->length(40);
            $table->string('uso')->length(45)->nullable($value = false);
            $table->integer('estratoactual')->nullable($value = false);
            $table->string('observaciones')->length(250);
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
