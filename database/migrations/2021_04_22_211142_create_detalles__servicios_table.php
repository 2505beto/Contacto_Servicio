<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetallesServiciosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalles__servicios', function (Blueprint $table) {
            $table->id();
            $table->string("descripcionLaboral",2);
            $table->date("fechaServicio");
        });

        Schema::table('detalles__servicios', function (Blueprint $table) {
            $table->unsignedBigInteger("id_servicio");
            $table->foreign("id_servicio")->references("id")->on("servicios")->cascadeOnDelete();
        });
        
        Schema::table('detalles__servicios', function (Blueprint $table) {
            $table->unsignedBigInteger("id_clientes");
            $table->foreign("id_clientes")->references("id")->on("clientes")->cascadeOnDelete();
        });

        Schema::table('detalles__servicios', function (Blueprint $table) {
            $table->unsignedBigInteger("id_personal");
            $table->foreign("id_personal")->references("id")->on("personals")->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detalles__servicios');
    }
}
