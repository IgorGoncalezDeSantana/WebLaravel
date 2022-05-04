<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarrinhoItensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('CARRINHO_ITENS', function (Blueprint $table) {
            $table->bigIncrements('ID_CARRINHO_ITENS');
            $table->integer('QUANTIDADE');
            $table->float('VALOR_TOTAL');
            $table->float('VALOR_UNITARIO');
            $table->unsignedBigInteger('ID_PRODUTO');
            $table->timestamps();

            $table->foreign('ID_PRODUTO')->references('ID_PRODUTO')->on('PRODUTOS');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('CARRINHO_ITENS');
    }
}
