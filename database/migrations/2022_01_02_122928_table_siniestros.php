<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TableSiniestros extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('siniestros', function (Blueprint $table) {
            $table->id();
            $table->integer('id_cliente');
            $table->integer('id_aseguradora');
            $table->date('fecha_parte');
            $table->date('fecha_siniestro');
            $table->string('direccion');
            $table->string('poblacion');
            $table->string('comentario');
            $table->string('agente_parte');
            $table->string('telefono_agente');
            $table->string('administrador');
            $table->string('causante');
            $table->string('otros')->nullable();
            $table->string('codigo');
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
        //
    }
}
