<?php

namespace App\Http\Controllers\Loja;

use App\Http\Controllers\Controller;
use App\IMAGENS;
use App\PRODUTOS;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProdutosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produtos = PRODUTOS::all();
        return view('Produtos',
            [
                'produtos' => $produtos
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
        if(Auth::check() === true)
        {
            return view('inserirProdutos');
        }
        return redirect()->route('usuario.login');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(Auth::check() === true)
        {
            if (isset($request->inserirProduto))
            {
                $produto = new PRODUTOS();
                $produto->NOME        = $request->NOME;
                $produto->DESCRICAO   = $request->DESCRICAO;
                $produto->PRECO       = $request->PRECO;
                $produto->PRECO_VENDA = $request->PRECO_VENDA;
                $produto->ALTURA        = $request->ALTURA;
                $produto->LARGURA       = $request->LARGURA;
                $produto->COMPRIMENTO   = $request->COMPRIMENTO;

                $imagem = IMAGENS::where('ID_IMAGEM',$request->ID_IMAGEM)->first();
                if($imagem)
                {
                    $produto->ID_IMAGEM     = $request->ID_IMAGEM;
                }
                else
                {
                    //return redirect()->route('produtos.create');
                    return redirect()->back()->with('error','O ID da imagem selecionada é inválido');
                }

                $produto->save();
                return redirect()->route('produtos.admin');

            }
            else if(isset($request->cancelarProduto))
            {
                return redirect()->route('produtos.admin');
            }
        }
        return redirect()->route('usuario.login');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\PRODUTOS  $produto
     * @return \Illuminate\Http\Response
     */
    public function show(PRODUTOS $produto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\PRODUTOS  $produto
     * @return \Illuminate\Http\Response
     */
    public function edit(PRODUTOS $produto)
    {
        if(Auth::check() === true)
        {
            return view('editarProdutos', ['produto' => $produto]);
        }
        return redirect()->route('usuario.login');

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\PRODUTOS  $pRODUTOS
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PRODUTOS $produto)
    {
        if(Auth::check() === true)
        {
            if (isset($request->alterarProduto))
            {
                $produto->NOME        = $request->NOME;
                $produto->DESCRICAO   = $request->DESCRICAO;
                $produto->PRECO       = $request->PRECO;
                $produto->PRECO_VENDA = $request->PRECO_VENDA;
                $produto->ALTURA        = $request->ALTURA;
                $produto->LARGURA       = $request->LARGURA;
                $produto->COMPRIMENTO   = $request->COMPRIMENTO;

                $imagem = IMAGENS::where('ID_IMAGEM',$request->ID_IMAGEM)->first();
                if($imagem)
                {
                    $produto->ID_IMAGEM     = $request->ID_IMAGEM;
                }
                else
                    {
                        return redirect()->back()->with('error','O ID da imagem selecionada é inválido');
                    }

                $produto->save();

                return redirect()->route('produtos.admin');
            }
            else if(isset($request->cancelarProduto))
            {
                return redirect()->route('produtos.admin');
            }

        }
        return redirect()->route('usuario.login');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\PRODUTOS  $produto
     * @return \Illuminate\Http\Response
     */
    public function destroy(PRODUTOS $produto)
    {
        if(Auth::check() === true)
        {
            $carrinho = $produto->carrinho_itens()->first();
            if(!$carrinho)
            {
                $produto->delete();
            }
            else{
                return redirect()->back()->with('error','Não é possível apagar o produto pois existe um carrinho com esse produto!');
            }
            return redirect()->route('produtos.admin');
        }
        return redirect()->route('usuario.login');
    }

    public function adminProdutos()
    {
        if(Auth::check() === true)
        {
            $produtos = PRODUTOS::all();
            return view('adminProduto',
                [
                    'produtos' => $produtos
                ]
            );

        }
        return redirect()->route('usuario.login');
    }
}
