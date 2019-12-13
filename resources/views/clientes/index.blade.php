@extends('layouts.app')
@section('title','Clientes')
@section('body')
    <a class="btn btn-primary" href="/clientes/create">inserir clientes</a>
    <br><br>
    <div class="card border">
        <div class="card-body">
            <h5 class="card-title">Clientes</h5>
            @if(count($clientes) > 0)
                <table class="table table-bordered table-houver">
                    <thead>
                        <th>Nome</th>
                        <th>Idade</th>
                        <th>Endereço</th>
                        <th>E-mail</th>
                        <th>Opções</th>
                    </thead>
                    <tbody>
                        @foreach ($clientes as $c)
                            <tr>
                                <td>{{$c->nome}}</td>
                                <td>{{$c->idade}}</td>
                                <td>{{$c->endereco}}</td>
                                <td>{{$c->email}}</td>
                                <td>
                                    <a href="{{route('clientes.edit', $c->id)}}" class="btn btn-sm btn-primary">Editar</a> |
                                    <a href="{{route('clientes.destroy', $c->id)}}" class="btn btn-sm btn-danger">Remover</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @else
                <span>Nenhum cliente cadastrado</span>
            @endif
        </div>
    </div>
@endsection
