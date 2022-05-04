<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class usuario extends Authenticatable
{
    protected $table = "usuarios";
    protected $primaryKey = "id";

    protected $hidden = [
        'remember_token','password'
    ];

    protected $fillable =[
        'name','sobr_user','cpf_user','email','password','sexo','data_user',
        'end_user','num_user','bairro_user','cep_user','estado','cidade_user',
    ];


}
