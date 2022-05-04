<?php

namespace App\Http\Controllers\Loja;

use App\Http\Controllers\Controller;
use App\IMAGENS;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ImagensController extends Controller
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
            $imagens = IMAGENS::all();
            return view('adminImagem',
                [
                    'imagens' => $imagens
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
        if(Auth::check() === true)
        {
            return view('inserirImagem');
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
            if (isset($request->inserirImagem))
            {
                if ($request->hasFile('IMAGEM_BLOB') && $request->file('IMAGEM_BLOB')->isValid())
                {
                    try {
                            $file = $request->file('IMAGEM_BLOB');
                            $contents = $file->openFile()->fread($file->getSize());
                            $imagem = new IMAGENS();
                            $imagem->IMAGEM_BLOB = $contents;
                            $imagem->save();

                    } catch (Exception $e) {
                        echo 'Exceção capturada: ', $e->getMessage(), "\n";
                    }
                }

                return redirect()->route('imagens.index');

            }
            else if(isset($request->cancelarImagem))
            {
                return redirect()->route('imagens.index');
            }
        }
        return redirect()->route('usuario.login');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\IMAGENS  $imagens
     * @return \Illuminate\Http\Response
     */
    public function show(IMAGENS $imagens)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\IMAGENS  $imagens
     * @return \Illuminate\Http\Response
     */
    public function edit(IMAGENS $imagens)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\IMAGENS  $imagens
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, IMAGENS $imagens)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\IMAGENS  $imagens
     * @return \Illuminate\Http\Response
     */
    public function destroy(IMAGENS $imagen)
    {
        if(Auth::check() === true)
        {
            $produtos = $imagen->produtos()->first();
            if(!$produtos)
            {
                $imagen->delete();
                return redirect()->route('imagens.index');
            }
            else{
                return redirect()->back()->with('error','Não é possível apagar a imagem pois existe um produto utilizando ela!');
            }
        }
        return redirect()->route('usuario.login');


    }
}
