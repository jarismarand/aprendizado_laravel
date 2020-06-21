@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="panel panel-default">                                    
              <ol class="breadcrumb panel-heading">
                <li><a href="{{route('cliente.index')}}">/Clientes</a></li>
                <li class="active">/Adicionar</li>
              </ol>
            </div>

              <div class="panel-body">
                <form action="{{route('cliente.atualizar', $cliente->id)}}" method="post">
                    @csrf
                    <input type="hidden" name="_method" value="put">
                    <div class="form-group">
                        <label for="nome">Nome:</label>
                        <input type="text" name="nome" class="form-control" placeholder="Nome do Cliente" value="{{$cliente->nome}}">                    
                    </div>
                    <div class="form-group">
                        <label for="email">E-mail:</label>
                        <input type="email" name="email" class="form-control" placeholder="E-mail do Cliente" value="{{$cliente->email}}">                    
                    </div>
                    <div class="form-group">
                        <label for="endereco">Endereço:</label>
                        <input type="text" name="endereco" class="form-control" placeholder="Endereço" value="{{$cliente->endereco}}">                    
                    </div>
                    <button class="btn btn-info">Adicionar</button>
                
                </form>
               </div>

            </div>
        </div>
    </div>
</div>
@endsection
