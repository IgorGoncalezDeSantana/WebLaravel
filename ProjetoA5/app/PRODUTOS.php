<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PRODUTOS extends Model
{
    protected $table = 'PRODUTOS';
    protected $primaryKey = 'ID_PRODUTO';

    protected $fillable =
        [
            'ID_PRODUTO',
            'NOME',
            'DESCRICAO',
            'PRECO',
            'PRECO_VENDA',
            'ALTURA',
            'LARGURA',
            'COMPRIMENTO',
            'ID_IMAGEM'
        ];

    public function imagem()
    {
        return $this->belongsTo(IMAGENS::class, 'ID_IMAGEM','ID_IMAGEM');
    }

    public function getImagem()
    {
        $imagem = $this->imagem()->first();
        return $imagem->IMAGEM_BLOB;

    }

    public function carrinho_itens()
    {
        return $this->hasMany(CARRINHO_ITENS::class, 'ID_PRODUTO','ID_PRODUTO');
    }


    public function pedidos_itens()
    {
        return $this->hasMany(pedido_item::class, 'ID_PRODUTO','ID_PRODUTO');
    }
}
