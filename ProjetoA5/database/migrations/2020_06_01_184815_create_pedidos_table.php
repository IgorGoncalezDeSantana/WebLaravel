<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePEDIDOSTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('PEDIDOS', function (Blueprint $table) {
            $table->bigIncrements('ID_PEDIDO');
            $table->string('NOME');
            $table->string('SOBRENOME');
            $table->string('EMAIL');
            $table->string('PAIS');
            $table->string('LOGRADOURO');
            $table->string('CIDADE');
            $table->string('UF');
            $table->string('CEP');
            $table->string('METODO_PAGAMENTO');
            $table->string('NOME_CARTAO');
            $table->string('NUMERO_CARTAO');
            $table->date('DATA_EXPIRACAO');
            $table->string('CVV');
            $table->float('VALOR_TOTAL');
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
        Schema::dropIfExists('PEDIDOS');
    }
}
