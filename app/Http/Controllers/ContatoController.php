<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SiteContato;
use App\MotivoContato;

class ContatoController extends Controller
{
    public function contato(Request $request){
        
        /*Primeira opção de persistir dados no BD
        $contato = new SiteContato();
        $contato->nome = $request->input('nome');
        $contato->telefone = $request->input('telefone');
        $contato->email = $request->input('email');
        $contato->motivo_contato = $request->input('motivo_contato');
        $contato->mensagem = $request->input('mensagem');
        //print_r($contato->getAttributes());
        $contato->save();
        */

        /* Segunda opção
            $contato = new SiteContato();
            $contato->fill($request->all());
            $contato->save();
        */

        /*terceira opção
            $contato = new SiteContato();
            $contato->create($request->all());    
        */
        
        //Para a segunda e terceira opção é necessário a variável protected $fillable com seus atributos no modelo, neste caso (SiteContato)

        $motivo_contatos = MotivoContato::all();
        
        return view('site.contato', ['motivo_contatos' => $motivo_contatos]);
    }

    public function salvar(Request $request){

        //Realizar a validação dos dados do formulário recebidos por request
        $regras = [
            'nome' => 'required|min:3|max:40|unique:site_contatos',
            'telefone' => 'required',
            'email' => 'email',
            'motivo_contatos_id' => 'required',
            'mensagem' => 'required|max:2000'
        ];

        $feedback=[
            'required' => 'O campo deve ser preenchido!',
            'nome.min' => 'O nome deve ter no mínimo 3 caracteres.',
            'nome.max' => 'O nome deve ter no máximo 40 caracteres.',
            'nome.unique' => 'O nome já está em uso',
            'email.email' => 'O email informado não é válido!',
            'mensagem.max' => 'A mensagem deve ter no máximo 2000 caracteres'
        ];

        $request->validate($regras, $feedback);

        SiteContato::create($request->all());  
        return redirect()->route('site.index');
    }
}
