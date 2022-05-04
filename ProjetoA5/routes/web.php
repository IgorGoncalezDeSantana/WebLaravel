<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('produtos/admin','Loja\\ProdutosController@adminProdutos')->name('produtos.admin');
Route::resource('produtos','Loja\\ProdutosController');

Route::post('carrinho/novo/{produto}', 'Loja\\CARRINHO_ITENS_CONTROLLER@insert')->name('carrinho.insert');
Route::put('carrinho/{carrinho}/upquant','Loja\\CARRINHO_ITENS_CONTROLLER@updateQuantidade')->name('carrinho.update.quantidade');
Route::resource('carrinho','Loja\\CARRINHO_ITENS_CONTROLLER');

Route::resource('imagens','Loja\\ImagensController')->parameters(['imagen' => 'imagens']);

Route::get('/checkout','Loja\\pedidoController@checkout')->name('pedidos.checkout');
Route::resource('/pedidos','Loja\\pedidoController');
Route::resource('/pedido_item','Loja\\pedidoItemController');


Route::get ('usuarios/novo','UsuarioController@formaddusuario')->name('usuarios.formaddusuario');
Route::get ('usuarios/editar/{usuario}','UsuarioController@editusuario')->name('usuarios.formaddusuario');
Route::POST('usuarios/novo/salvar','UsuarioController@salvarusuario')-> name('usuario.salvar');
Route::put('usuario/edit/{usuario}','UsuarioController@mudar')->name('usuario.edit');
Route::delete('usuarios/destroy/{usuario}','UsuarioController@destroy')->name('usuario.destroy');
Route::get ('usuarios','UsuarioController@todosusuarios')-> name('usuarios.todos');


route::get('login','UsuarioController@login')->name('usuario.login');
route::post('login','UsuarioController@dologin')->name('usuario.dologin');
route::get('logout','UsuarioController@logout')->name('usuario.logout');


Route::get('/', function () {
    return view('Front.index');
})->name('index');

Route::get('/contato', function () {
    return view('Front.contact');
})->name('contact');
