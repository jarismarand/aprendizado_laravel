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
                <form action="{{route('cliente.salvar')}}" method="post">
                    @csrf
                    <div class="form-group {{ $errors->has('nome') ? 'has-error' : '' }}">
                        <label for="nome">Nome:</label>
                         <input type="text" name="nome" class="form-control" placeholder="Nome do Cliente">
                            @error('nome')
                                <span class="help-block">
                                    <strong>{{$message}}</strong>
                                </span>
                            @enderror
                    </div>
                    <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                        <label for="email">E-mail:</label>
                        <input type="text" name="email" class="form-control" placeholder="E-mail do Cliente">  
                        @error('email')
                                <span class="help-block">
                                    <strong>{{$message}}</strong>
                                </span>
                            @enderror                  
                    </div>
                    <div class="form-group{{ $errors->has('endereco') ? 'has-error' : '' }}">
                        <label for="endereco">Endereço:</label>
                        <input type="text" name="endereco" class="form-control" placeholder="Endereço">  
                        @error('endereco')
                                <span class="help-block">
                                    <strong>{{$message}}</strong>
                                </span>
                            @enderror                  
                    </div>
                    <button class="btn btn-info">Adicionar</button>
                
                </form>
               </div>

            </div>
        </div>
    </div>
</div>
@endsection
