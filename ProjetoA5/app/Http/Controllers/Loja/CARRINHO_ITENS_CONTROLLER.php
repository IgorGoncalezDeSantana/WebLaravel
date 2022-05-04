<?php

namespace App\Http\Controllers\Loja;

use App\CARRINHO_ITENS;
use App\Http\Controllers\Controller;
use App\PRODUTOS;
use Illuminate\Http\Request;

class CARRINHO_ITENS_CONTROLLER extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $carrinhos = CARRINHO_ITENS::all();
        return view('carrinho',
            [
                'carrinhos' => $carrinhos
            ]
        );
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
        $carrinho = new CARRINHO_ITENS();
        $carrinho->ID_PRODUTO        = $request->ID_PRODUTO;
        $carrinho->QUANTIDADE        = $request->QUANTIDADE;
        $carrinho->VALOR_TOTAL       = $request->VALOR_TOTAL;
        $carrinho->VALOR_UNITARIO    = $request->VALOR_UNITARIO;
        $carrinho->save();

        return redirect()->route('carrinho.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\CARRINHO_ITENS  $carrinho
     * @return \Illuminate\Http\Response
     */
    public function show(CARRINHO_ITENS $carrinho)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CARRINHO_ITENS  $carrinho
     * @return \Illuminate\Http\Response
     */
    public function edit(CARRINHO_ITENS $carrinho)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CARRINHO_ITENS  $carrinho
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CARRINHO_ITENS $carrinho)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CARRINHO_ITENS  $carrinho
     * @return \Illuminate\Http\Response
     */
    public function destroy(CARRINHO_ITENS $carrinho)
    {
        $carrinho->delete();
        return redirect()->route('carrinho.index');
    }

    public function insert(PRODUTOS $produto)
    {
        $carrinho = new CARRINHO_ITENS();
        $carrinho->ID_PRODUTO        = $produto->ID_PRODUTO;
        $carrinho->QUANTIDADE        = 1;
        $carrinho->VALOR_TOTAL       = $produto->PRECO;
        $carrinho->VALOR_UNITARIO    = $produto->PRECO;
        $carrinho->save();

        return redirect()->route('carrinho.index');
    }

    public function updateQuantidade(Request $request, CARRINHO_ITENS $carrinho)
    {
        if (isset($request->inc))
        {
            $carrinho->QUANTIDADE++;
            $carrinho->VALOR_TOTAL = $carrinho->VALOR_UNITARIO * $carrinho->QUANTIDADE;
            $carrinho->save();
        }
        else if (isset($request->dec))
        {
            if($carrinho->QUANTIDADE > 1)
            {
                $carrinho->QUANTIDADE--;
                $carrinho->VALOR_TOTAL = $carrinho->VALOR_UNITARIO * $carrinho->QUANTIDADE;
                $carrinho->save();
            }
        }
        return redirect()->route('carrinho.index');
    }
}
