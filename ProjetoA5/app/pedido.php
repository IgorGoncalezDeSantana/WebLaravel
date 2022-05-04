<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pedido extends Model
{
    protected $table = 'PEDIDOS';
    protected $primaryKey = 'ID_PEDIDO';

    protected $fillable =
        [
            'ID_PEDIDO',
            'NOME',
            'SOBRENOME',
            'EMAIL',
            'PAIS',
            'LOGRADOURO',
            'CIDADE',
            'UF',
            'CEP',
            'METODO_PAGAMENTO',
            'NOME_CARTAO',
            'NUMERO_CARTAO',
            'DATA_EXPIRACAO',
            'CVV',
            'VALOR_TOTAL'
        ];

    public function pedidos_itens()
    {
        return $this->hasMany(pedido_item::class, 'ID_PEDIDO','ID_PEDIDO');
    }

}
