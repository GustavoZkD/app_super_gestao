<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Fornecedor;

class FornecedoresController extends Controller
{
    public function index(){
        return view('app.fornecedor.index');
    }

    public function listar(Request $request){

        $fornecedores = Fornecedor::where('name', 'like', '%'.$request->input('name').'%')
            ->where('site', 'like', '%'.$request->input('site').'%')
            ->where('uf', 'like', '%'.$request->input('uf').'%')
            ->where('email', 'like', '%'.$request->input('email').'%')
        ->paginate(5);

        return view('app.fornecedor.listar', ['fornecedores' => $fornecedores, 'request' => $request->all()]);
    }

    public function adicionar(Request $request){
        
        $msg = '';

        //inclusão
        if($request->input('_token') != '' &&  $request->input('id') == ''){
            //validação dos dados
            
            $regras = [
                'name' => 'required|min:3|max:40',
                'site' => 'required',
                'uf' => 'required|min:2|max:2',
                'email' => 'email'
            ];

            $feedback = [
                'required' => 'O campo :attribute deve ser preenchido',
                'name.min' => 'O campo nome deve ter pelo menos 3 caracteres',
                'name.max' => 'O campo nome deve ter no máximo 40 caracteres',
                'uf.min' => 'O campo uf deve ter pelo menos 2 caracteres',
                'uf.max' => 'O campo uf deve ter no máximo 2 caracteres',
                'email.email' => 'O campo e-mail não foi preenchido corretamente'
            ];
            
            $request->validate($regras, $feedback);
            
            $fornecedor = new Fornecedor();
            $fornecedor->create($request->all());

            $msg = 'Cadastro realizado com sucesso!';
        }

        //edição
        if($request->input('_token') != '' &&  $request->input('id') != ''){
            $fornecedor = Fornecedor::find($request->input('id'));
            $update = $fornecedor->update($request->all());

            if($update){
                $msg = 'Atualização realizada com sucesso!';
            }else{
                $msg = 'Erro ao tentar atualizar o registro';
            }

            return redirect()->route('app.fornecedor.editar', ['id' => $request->input('id'), 'msg' => $msg]);
        }
            
        return view('app.fornecedor.adicionar', ['msg' => $msg]);
    }

    public function editar($id, $msg = ''){
        $fornecedor = Fornecedor::find($id);
        
        return view('app.fornecedor.adicionar', ['fornecedor' => $fornecedor, 'msg' => $msg]);
    }

    public function excluir($id){
        Fornecedor::find($id)->delete();
        return redirect()->route('app.fornecedor');
    }
}
