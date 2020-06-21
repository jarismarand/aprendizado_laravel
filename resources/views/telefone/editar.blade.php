@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="panel panel-default">                                    
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('cliente.index')}}">Clientes</a></li>
                <li class="breadcrumb-item"><a href="{{route('cliente.detalhe', $telefone->cliente->id)}}">Detalhe</a></li>
                <li class="breadcrumb-item active">Editar Telefones</li>
              </ol>
            </div>

              <div class="panel-body">
                <form action="{{route('telefone.atualizar', $telefone->id)}}" method="post">
                    @csrf
                    <input type="hidden" name="_metho" value="put">
                    <div class="form-group">
                        <label for="titulo">Título:</label>
                        <input type="text" name="titulo" class="form-control" placeholder="Título do Telefone" value="{{$telefone->titulo}}">                    
                    </div>
                    <div class="form-group">
                        <label for="numero">Número do telefone:</label>
                        <input type="text" name="telefone" class="form-control" placeholder="Número do Telefone" value="{{$telefone->telefone}}">                    
                    </div>

                    <button class="btn btn-info">Atualizar</button>
                
                </form>
               </div>

            </div>
        </div>
    </div>
</div>
@endsection
