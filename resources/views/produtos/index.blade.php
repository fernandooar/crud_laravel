@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Produtos</h1>

    @if (session('success'))
        <div class='alert alert-success'>
            {{session('sucess')}}
        </div>
    @endif

    <a href="{{ route('produtos.create') }}" class="btn btn-primary mb-3">Novo Produto</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Preço</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($produtos as $produto)
                <tr>
                    <td>{{ $produto->id }}</td>
                    <td>{{ $produto->nome }}</td>
                    <td>R$ {{ number_format($produto->preco, 2, ',', '.') }}</td>
                    <td>{{ $produto->quantidade}}</td>
                    <td>
                        <a href="{{ route('produtos.show', $produto->id) }}" class="btn bnt-info">Ver</a>  
                        <a href="{{ route('produtos.edit', $produto->id) }}" class="btn btn-warning">Editar</a>
                        <form action="{{ route('produtos.destroy', $produto->id) }}" method="POTS" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Excluir</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
