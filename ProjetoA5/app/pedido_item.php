<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pedido_item extends Model
{
    protected $table = 'PEDIDOS_ITENS';
    protected $primaryKey = 'ID_PEDIDO_ITEM';

    protected $fillable =[
        'ID_PEDIDO_ITEM',
        'ID_PRODUTO',
        'QUANTIDADE',
        'VALOR_TOTAL',
        'VALOR_UNITARIO',
        'ID_PEDIDO'
    ];

    public function produto()
    {
        return $this->belongsTo(PRODUTOS::class, 'ID_PRODUTO','ID_PRODUTO');
    }

    public function pedido()
    {
        return $this->belongsTo(pedido::class, 'ID_PEDIDO','ID_PEDIDO');
    }

    public function inserirDoCarrinho(pedido $pedido,CARRINHO_ITENS $carrinho)
    {
        $this->ID_PRODUTO = $carrinho->ID_PRODUTO;
        $this->QUANTIDADE = $carrinho->QUANTIDADE;
        $this->VALOR_TOTAL = $carrinho->VALOR_TOTAL;
        $this->VALOR_UNITARIO = $carrinho->VALOR_UNITARIO;
        $this->ID_PEDIDO = $pedido->ID_PEDIDO;
        $this->save();
        $carrinho->delete();
    }


}
