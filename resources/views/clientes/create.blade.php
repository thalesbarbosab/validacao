@extends('layouts.app')
@section('title','Inserir Clientes')
@section('body')
<h4>Criar cliente</h4>
<div class="card border">
    <div class="card-body">
        <form action="/clientes" method="POST">
            @csrf
            <div class="form-group">
                <label for="nomeProduto">Nome do Cliente</label>
                <input type="text" class="form-control" name="txtNome" required id="txtNome" placeholder="Insira o nome do Cliente">
            </div>
            <div class="form-group">
                <label for="txtIdade">Idade</label>
                <input type="number" class="form-control" name="txtIdade" required id="txtIdade" placeholder="Insira a idade">
            </div>
            <div class="form-group">
                <label for="txtEndereco">Endereço</label>
                <input type="text" class="form-control" name="txtEndereco" required id="txtEndereco" placeholder="Insira o endereço">
            </div>
            <div class="form-group">
                <label for="txtEmail">Endereço</label>
                <input type="text" class="form-control" name="txtEmail" required id="txtEmail" placeholder="Insira o e-mail">
            </div>
            <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
            <a type="cancel" href="/clientes" class="btn btn-warning btn-sm">Cancelar</a>
        </form>
    </div>
</div>
@endsection



