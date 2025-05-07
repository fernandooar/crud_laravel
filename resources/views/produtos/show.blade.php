@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detalhes do Produto</h1>
    
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{ $produto->nome }}</h5>
            <p class="card-text">{{ $produto->descricao }}</p>
            <ul class="list-group list-group-flush">
                <li class="list-group-item"><strong>Preço:</strong> R$ {{ number_format($produto->preco, 2, ',', '.') }}</li>
                <li class="list-group-item"><strong>Quantidade:</strong> {{ $produto->quantidade }}</li>
                <li class="list-group-item"><strong>Criado em:</strong> {{ $produto->created_at->format('d/m/Y H:i') }}</li>
                <li class="list-group-item"><strong>Atualizado em:</strong> {{ $produto->updated_at->format('d/m/Y H:i') }}</li>
            </ul>
        </div>
    </div>
    
    <div class="mt-3">
        <a href="{{ route('produtos.edit', $produto->id) }}" class="btn btn-warning">Editar</a>
        <form action="{{ route('produtos.destroy', $produto->id) }}" method="POST" style="display: inline;">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Excluir</button>
        </form>
        <a href="{{ route('produtos.index') }}" class="btn btn-secondary">Voltar</a>
    </div>
</div>
@endsection