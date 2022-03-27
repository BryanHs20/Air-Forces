<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aforce', function (Blueprint $table) {
            //Campos que llevara la BD
            $table->id();
            $table->text('Nombre');
            $table->text('Parrafo1');
            $table->text('Parrafo2');
            $table->text('Imagen1');
            $table->text('Imagen2');
            $table->text('slug');
            $table->timestamps();
            //Creacion del seeder
            //Mencion de la BD en el .env
            //Creacion de la migracion a la BD
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('aforce');
    }
};
