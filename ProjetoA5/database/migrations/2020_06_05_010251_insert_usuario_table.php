<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class InsertUsuarioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('usuarios')->insert(
            array(
                    'name'          =>'Usuario',
                    'sobr_user'     =>'Teste',
                    'cpf_user'      =>'123456789123',
                    'email'         =>'usuario@usuario.com',
                    'password'      =>bcrypt('123456789'),
                    'sexo'          =>'M',
                    'data_user'     => date( 'Y-m-d H:i:s' , strtotime('04/06/2020')),
                    'end_user'      => 'Rua teste',
                    'num_user'      => '123',
                    'bairro_user'   => 'Bairro teste',
                    'cep_user'      => '012345123',
                    'estado'        => 'São Paulo',
                    'cidade_user'   => 'São Paulo'
            )
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
