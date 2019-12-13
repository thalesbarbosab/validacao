@extends('layouts.app')
@section('title','Editar Cliente')
@section('body')
<h4>Editar cliente {{$cliente->nome}}</h4>
<div class="card border">
    <div class="card-body">
        <form action="{{route('clientes.update',$cliente->id)}}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="nomeProduto">Nome do Cliente</label>
                <input type="text" class="form-control" name="txtNome" required id="txtNome" placeholder="Insira o nome do Cliente" value="{{$cliente->nome}}">
            </div>
            <div class="form-group">
                <label for="txtIdade">Idade</label>
                <input type="number" class="form-control" name="txtIdade" required id="txtIdade" placeholder="Insira a idade" value="{{$cliente->idade}}">
            </div>
            <div class="form-group">
                <label for="txtEndereco">Endereço</label>
                <input type="text" class="form-control" name="txtEndereco" required id="txtEndereco" placeholder="Insira o endereço" value="{{$cliente->endereco}}">
            </div>
            <div class="form-group">
                <label for="txtEmail">Endereço</label>
                <input type="text" class="form-control" name="txtEmail" required id="txtEmail" placeholder="Insira o e-mail" value="{{$cliente->email}}">
            </div>
            <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
            <a type="cancel" href="/clientes" class="btn btn-warning btn-sm">Cancelar</a>
        </form>
    </div>
</div>
@endsection



