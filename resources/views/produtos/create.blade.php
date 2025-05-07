@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Criar Novo Produto</h1>
    
    <form action="{{ route('produtos.store') }}" method="POST">
        @csrf
        
        <div class="form-group">
            <label for="nome">Nome:</label>
            <input type="text" name="nome" id="nome" class="form-control" required>
        </div>
        
        <div class="form-group">
            <label for="descricao">Descrição:</label>
            <textarea name="descricao" id="descricao" class="form-control" rows="3"></textarea>
        </div>
        
        <div class="form-group">
            <label for="preco">Preço:</label>
            <input type="number" name="preco" id="preco" class="form-control" step="0.01" min="0" required>
        </div>
        
        <div class="form-group">
            <label for="quantidade">Quantidade:</label>
            <input type="number" name="quantidade" id="quantidade" class="form-control" min="0" required>
        </div>
        
        <button type="submit" class="btn btn-primary">Salvar</button>
        <a href="{{ route('produtos.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection