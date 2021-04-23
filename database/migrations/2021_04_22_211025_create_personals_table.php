<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personals', function (Blueprint $table) {
            $table->id();
            $table->string("nombres", 50);
            $table->string("apellidos", 50);
            $table->date("fechaNacimiento");
            $table->string("correo", 80);
            $table->string("contraseña", 120);
            $table->string("direccion", 120);
            $table->string("telefono", 9);
            $table->string("sexo", 1);
            $table->float("costoPorHora");
        });

        Schema::table('personals', function (Blueprint $table) {
            $table->unsignedBigInteger("id_servicio");
            $table->foreign("id_servicio")->references("id")->on("servicios")->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('personals');
    }
}
