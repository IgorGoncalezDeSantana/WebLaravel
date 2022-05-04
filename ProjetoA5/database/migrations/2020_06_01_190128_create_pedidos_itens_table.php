<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePedidosItensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('PEDIDOS_ITENS', function (Blueprint $table) {
            $table->bigIncrements('ID_PEDIDO_ITEM');
            $table->integer('QUANTIDADE');
            $table->float('VALOR_TOTAL');
            $table->float('VALOR_UNITARIO');
            $table->unsignedBigInteger('ID_PRODUTO');
            $table->unsignedBigInteger('ID_PEDIDO');
            $table->timestamps();
            $table->foreign('ID_PRODUTO')->references('ID_PRODUTO')->on('PRODUTOS');
            $table->foreign('ID_PEDIDO')->references('ID_PEDIDO')->on('PEDIDOS');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('PEDIDOS_ITENS');
    }
}
