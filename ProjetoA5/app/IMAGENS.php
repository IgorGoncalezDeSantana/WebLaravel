<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IMAGENS extends Model
{
    protected $table = 'IMAGENS';
    protected $primaryKey = 'ID_IMAGEM';

    protected $fillable =
        [
            'ID_IMAGEM',
            'IMAGEM_BLOB'
        ];

    public function produtos()
    {
        return $this->hasMany(PRODUTOS::class,'ID_IMAGEM','ID_IMAGEM' );
    }
}
