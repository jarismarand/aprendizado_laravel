@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="links">
                    <a href="{{ route('cliente.index')}}" >Lista de Clientes</a>
                    <div>
                    <a class="btn btn-outline-success" href="{{route('cliente.adcionar')}}">Novo Cliente</a>
                    </div>
                          <div class="panel panel-default">                                    
                            <ol class="breadcrumb panel-heading">
                                <li><a href="{{route('cliente.index')}}">/ Clientes</a></li>
                                <li class="active">/ Detalhe</li>
                            </ol>
                        </div>

            <div class="panel-body">
            <p><b>Cliente:</b>{{$cliente->nome}}</p>
            <p><b>E-mail:</b>{{$cliente->email}}</p>
            <p><b>Endereço:</b>{{$cliente->endereco}}</p>

                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Título</th>
                                <th>Número</th>
                                <th>Ação</th>
                            </tr>
                        </thead>
                        <tbody>
                    @foreach($cliente->telefones as $telefone)                                       
                     

                            <tr>
                                <th scope="row">{{$telefone->id}}</th>
                                <td>{{$telefone->titulo}}</td>
                                <td>{{$telefone->telefone}}</td>                               
                                <td>
                                    <a class="btn btn-default" href="{{route('telefone.editar', $telefone->id)}}">Editar</a>
                                    <a class="btn btn-danger" href="javascript:(confirm('Tem certeza de que deseja deletar este registro?') ? window.location.href='{{route('telefone.deletar', $telefone->id)}}' : false)">Deletar</a>
                                </td>
                            </tr>
                    @endforeach
                        </tbody>
                                           
                    </table>
                    <a class="btn btn-default" href="{{route('telefone.adicionar', $cliente->id)}}">Adicionar Telefone</a>
            </div>      

                </div>
                  
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
