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

Route::get('/', 'HomeController@principal')->name('site.index');
Route::get('/sobre-nos', 'SobreNosController@sobreNos')->name('site.sobre');

Route::get('/contato', 'ContatoController@contato')->name('site.contato');
Route::post('/contato', 'ContatoController@salvar')->name('site.contato');

Route::get('/login/{erro?}', 'LoginController@index')->name('site.login');
Route::post('/login', 'LoginController@autenticar')->name('site.login');

Route::middleware('autenticacao')->prefix('/app')->group(function(){
    Route::get('/home', 'AdminHomeController@index')->name('app.home');
    Route::get('/sair', 'LoginController@sair')->name('app.sair');

    //fornecedores
    Route::get('/fornecedor', 'FornecedoresController@index')->name('app.fornecedor');
    Route::get('/fornecedor/listar', 'FornecedoresController@listar')->name('app.fornecedor.listar');
    Route::post('/fornecedor/listar', 'FornecedoresController@listar')->name('app.fornecedor.listar');
    Route::get('/fornecedor/adicionar', 'FornecedoresController@adicionar')->name('app.fornecedor.adicionar');
    Route::post('/fornecedor/adicionar', 'FornecedoresController@adicionar')->name('app.fornecedor.adicionar');
    Route::get('/fornecedor/editar/{id}/{msg?}', 'FornecedoresController@editar')->name('app.fornecedor.editar');
    Route::get('/fornecedor/excluir/{id}', 'FornecedoresController@excluir')->name('app.fornecedor.excluir');

    //produtos
    Route::resource('produto', 'ProdutoController');

    //produto detalhes
    Route::resource('produto-detalhe', 'ProdutoDetalheController');

    Route::resource('cliente', 'ClienteController');
    Route::resource('pedido', 'PedidoController');
    //Route::resource('pedido-produto', 'PedidoProdutoController');
    Route::get('pedido-produto/create/{pedido}', 'PedidoProdutoController@create')->name('pedido-produto.create');
    Route::post('pedido-produto/store/{pedido}', 'PedidoProdutoController@store')->name('pedido-produto.store');
    //Route::delete('pedido-produto.destroy/{pedido}/{produto}', 'PedidoProdutoController@destroy')->name('pedido-produto.destroy');
    Route::delete('pedido-produto.destroy/{pedidoProduto}/{pedido_id}', 'PedidoProdutoController@destroy')->name('pedido-produto.destroy');
});

Route::fallback(function(){
    echo 'Página não existente. <a href="'.route('site.index').'">Clique aqui</a> para ir ser redirecionado para página principal!';
});