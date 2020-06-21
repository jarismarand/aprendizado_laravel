<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class ClienteController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $clientes = \App\Cliente::paginate(15);

        return view('cliente.index', compact('clientes'));
    }

    public function adcionar()
    {
        return view('cliente.adcionar');
    }

    
    public function detalhe($id)
    {
        $cliente = \App\Cliente::find($id);
        return view('/cliente.detalhe', compact('cliente'));
    }

    public function salvar(\App\Http\Requests\ClienteRequest $request)
    {
        \App\Cliente::create($request->all());
        \Session::flash('flash_message', [
            'msg'=>"Cliente adcionado com sucesso!",
            'class'=>"alert-success"
            ]);                 /* Cria uma mensagem após salvar no banco de dados */
        return redirect()->route('cliente.adcionar');
    }

    public function editar($id)
    {
        $cliente = \App\Cliente::find($id);
        if(!$cliente){
            \Session::flash('flash_message', [
                'msg'=>"Não eciste esse Cliente Cadastrado! Deseja cadastrar?",
                'class'=>"alert-danger"
            ]);
            return redirect()->route('cliente.adcionar');
        }

        return view('cliente.editar', compact('cliente'));
    }

    public function atualizar(Request $request, $id)
    {
        \App\Cliente::find($id)->update($request->all());
        \Session::flash('flash_message', [
            'msg'=> "Cliente atualizado com sucesso!",
            'class'=>"alert-success"
        ]);

        return redirect()->route('cliente.index');
    }

    public function deletar($id)
    {
        $cliente = \App\Cliente::find($id);

        if(!$cliente->deletarTelefones()){
            \Session::flash('flash_message', [
                'msg'=> "Registro não pode ser deletado",
                'class'=>"alert-danger"
            ]); 

            return redirect()->route('cliente.index');
        }

        $cliente->delete();
        \Session::flash('flash_message', [
            'msg'=> "Cliente deletado com sucesso!",
            'class'=>"alert-success"
        ]);
        return redirect()->route('cliente.index');
    }

}
