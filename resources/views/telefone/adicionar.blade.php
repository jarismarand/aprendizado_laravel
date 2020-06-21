@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="panel panel-default">                                    
              <ol class="breadcrumb panel-heading">
                <li><a href="{{route('cliente.index')}}">/Clientes</a></li>
                <li><a href="{{route('cliente.detalhe', $cliente->id)}}">/Clientes</a>Detalhe</li>
                <li class="active">Adicionar Telefones</li>
              </ol>
            </div>

              <div class="panel-body">
                <form action="{{route('telefone.salvar', $cliente->id)}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="titulo">Título:</label>
                        <input type="text" name="titulo" class="form-control" placeholder="Título do Telefone">                    
                    </div>
                    <div class="form-group">
                        <label for="numero">Número do telefone:</label>
                        <input type="text" name="telefone" class="form-control" placeholder="Número do Telefone">                    
                    </div>

                    <button class="btn btn-info">Adicionar</button>
                
                </form>
               </div>

            </div>
        </div>
    </div>
</div>
@endsection
