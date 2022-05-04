<?php

namespace App\Http\Controllers\Loja;

use App\CARRINHO_ITENS;
use App\Http\Controllers\Controller;
use App\pedido;
use App\pedido_item;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class pedidoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::check() === true)
        {
            $pedidos = pedido::all();
            return view('pedidos',
                [
                    'pedidos' => $pedidos
                ]
            );
        }
        return redirect()->route('usuario.login');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $carrinhos = CARRINHO_ITENS::all();
        if($carrinhos->first())
        {
            $pedido = new pedido();
            $pedido->NOME = $request->NOME;
            $pedido->SOBRENOME = $request->SOBRENOME;
            $pedido->EMAIL = $request->EMAIL;
            $pedido->PAIS = $request->PAIS;
            $pedido->LOGRADOURO = $request->LOGRADOURO;
            $pedido->CIDADE = $request->CIDADE;
            $pedido->UF = $request->UF;
            $pedido->CEP = $request->CEP;
            $pedido->METODO_PAGAMENTO = $request->METODO_PAGAMENTO;
            $pedido->NOME_CARTAO = $request->NOME_CARTAO;
            $pedido->NUMERO_CARTAO = $request->NUMERO_CARTAO;
            $pedido->DATA_EXPIRACAO = date( 'Y-m-d H:i:s' , strtotime($request->DATA_EXPIRACAO));
            $pedido->CVV = $request->CVV;
            $pedido->VALOR_TOTAL = \DB::table('CARRINHO_ITENS')->sum('carrinho_itens.VALOR_TOTAL');
            $pedido->save();

            foreach ($carrinhos as $carrinho) {
                $pedido_item = new pedido_item();
                $pedido_item->inserirDoCarrinho($pedido, $carrinho);
            }
        }

        return redirect()->route('produtos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\pedido  $pedido
     * @return \Illuminate\Http\Response
     */
    public function show(pedido $pedido)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\pedido  $pedido
     * @return \Illuminate\Http\Response
     */
    public function edit(pedido $pedido)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\pedido  $pedido
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, pedido $pedido)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\pedido  $pedido
     * @return \Illuminate\Http\Response
     */
    public function destroy(pedido $pedido)
    {
        //
    }

    public function checkout()
    {
        return view('checkout');
    }
}
