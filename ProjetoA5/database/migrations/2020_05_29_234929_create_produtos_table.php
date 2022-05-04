<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProdutosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('PRODUTOS', function (Blueprint $table) {
            $table->bigIncrements('ID_PRODUTO');
            $table->string('NOME');
            $table->text('DESCRICAO');
            $table->float('PRECO');
            $table->float('PRECO_VENDA');
            $table->string('ALTURA');
            $table->string('LARGURA');
            $table->string('COMPRIMENTO');
            $table->unsignedBigInteger('ID_IMAGEM');
            $table->timestamps();

            $table->foreign('ID_IMAGEM')->references('ID_IMAGEM')->on('IMAGENS');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('PRODUTOS');
    }
}
