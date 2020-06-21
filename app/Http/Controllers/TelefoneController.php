<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TelefoneController extends Controller
{
    public function __construct()
        {
            $this->middleware('auth');
        }

        public function adicionar($id)
        {
            $cliente = \App\Cliente::find($id);
            return view('/telefone.adicionar', compact('cliente'));
        }
        public function salvar(Request $request, $id)
        {
            $telefone = new \App\Telefone;
            $telefone->titulo = $request->input('titulo');
            $telefone->telefone = $request->input('telefone');
            
            \App\Cliente::find($id)->addTelefone($telefone);

            \Session::flash('flash_message', [
                'msg'=> "telefone incluído com sucesso!",
                'class'=>"alert-success"
            ]);

            return redirect()->route('cliente.detalhe', $id);
        
        }

        public function editar($id)
        {
           
            $telefone = \App\Telefone::find($id);
            if(!$telefone){
                \Session::flash('flash_message', [
                    'msg'=>"Não eciste esse Telefone Cadastrado! Deseja cadastrar?",
                    'class'=>"alert-danger"
                ]);
                return redirect()->route('cliente.detalhe', $telefone->cliente->id);
            }
    
            return view('telefone.editar', compact('telefone'));
        }

        public function atualizar(Request $request, $id)
        {
            $telefone = \App\Telefone::find($id);
            \App\Telefone::find($id)->update($request->all());
            \Session::flash('flash_message', [
                'msg'=> "Telefone atualizado com sucesso!",
                'class'=>"alert-success"
            ]);
    
            return redirect()->route('cliente.detalhe', $telefone->cliente->id );
        }

        public function deletar($id)
        {
            $telefone = \App\Telefone::find($id);
    
            $telefone->delete();
                \Session::flash('flash_message', [
                    'msg'=> "Telefone excluído",
                    'class'=>"alert-danger"
                ]); 
    
                return redirect()->route('cliente.detalhe', $telefone->cliente->id);
            }
            
    
}
