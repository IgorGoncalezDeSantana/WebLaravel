<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuariosTable extends Migration
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
            $table->string('name');
            $table->string('sobr_user');
            $table->string('cpf_user')->unique();
            $table->string('email')->unique();
            $table->string('password');
            $table->string('sexo');
            $table->date('data_user');
            $table->string('end_user');
            $table->string('num_user');
            $table->string('bairro_user');
            $table->string('cep_user');
            $table->string('estado');
            $table->string('cidade_user');
            $table->rememberToken();
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
