<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompositionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('composicaos', function (Blueprint $table) {
            $table->id();
            $table->string('titulo')->length(50);
            $table->string('categoria')->length(45);
            $table->string('texto')->length(500);
            $table->string('participacao')->length(45);
            $table->string('produzido')->length(45);
            $table->string('escrito')->length(45);
            $table->string('soundcloud')->length(200);
            $table->string('youtube')->length(200);
            $table->unsignedBigInteger('usuario_id');
            $table->timestamps();

            $table->foreign('usuario_id')->references('id')->on('usuarios');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('composicaos');
    }
}
