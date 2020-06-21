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
                   

                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nome</th>
                                <th>E-mail</th>
                                <th>Ação</th>
                            </tr>
                        </thead>
                        <tbody>
                     
                        @foreach($clientes as $cliente)                       
                     

                            <tr>
                                <th scope="row">{{$cliente->id}}</th>
                                <td>{{$cliente->nome}}</td>
                                <td>{{$cliente->email}}</td>                               
                                <td>
                                    <a class="btn btn-default" href="{{route('cliente.editar', $cliente->id)}}">Editar</a>
                                    <a class="btn btn-default" href="{{route('cliente.detalhe', $cliente->id)}}">Detalhe</a>
                                    <a class="btn btn-danger" href="javascript:(confirm('Tem certeza de que deseja deletar este registro?') ? window.location.href='{{route('cliente.deletar', $cliente->id)}}' : console.log('cancelado'))">Deletar</a>
                                </td>
                            </tr>

                            @endforeach
                        </tbody>
                    
                    </table>

                    <div>
                    
                        <!-- Paginando os resultados-->
                        {!! $clientes->links() !!}
                    </div>

                </div>
                  
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
