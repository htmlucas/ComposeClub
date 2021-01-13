<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->id();
            $table->string('nome_completo')->length(255);
            $table->string('nomedeusuario')->length(100)->unique();
            $table->string('email')->length(50)->unique();
            $table->string('senha')->length(200);
            $table->string('fotoperfil')->length(200)->nullable();
            $table->string('fotocapa')->length(200)->nullable();
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
        Schema::dropIfExists('usuarios');
    }
}
