<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CARRINHO_ITENS extends Model
{
    protected $table = 'CARRINHO_ITENS';
    protected $primaryKey = 'ID_CARRINHO_ITENS';

    protected $fillable =[
        'ID_CARRINHO_ITENS',
        'ID_PRODUTO',
        'QUANTIDADE',
        'VALOR_TOTAL',
        'VALOR_UNITARIO'
    ];

    public function produto()
    {
        return $this->belongsTo(PRODUTOS::class, 'ID_PRODUTO','ID_PRODUTO');
    }

    public function getImagem()
    {
        $produto = $this->produto()->first();
        return $produto->getImagem();
    }
}
