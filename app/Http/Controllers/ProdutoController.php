<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Obtém os dados do produto do banco de dados
        $produtos = Produto::all();

        // Retorna a view 'produtos.index passando os produtos como variavel
        return view('produtos.index', compact('produtos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Retorna a view com o formulário de criacao
        return view('produtos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Valida os dados do formulario
        //dd($request->all());
        $request->validate([
            'nome' => 'required|max:255',
            'descricao' => 'nullable',
            'preco' => 'required|numeric|min:0',
            'quantidade' => 'required|integer|min:0'
        ]);

        // Cria um novo produto no banco de dados
        Produto::create($request->all());

        // Redireciona para a lista de produtos com a mensagem de sucesso
        return redirect()->route('produtos.index')
        ->with('success', 'Produto cadastrado com sucesso');
    }

    /**
     * Display the specified resource.
     */
    public function show(Produto $produto)
    {
        // Retorna a view de detalhes do produto
        return view('produtos.show', compact('produto'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Produto $produto)
    {
        // Retorna a view de edicao dcom os dados do produto

        return view('produtos.edit', compact('produto'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Produto $produto)
    {
        // Valida os dados do fornulário

        $request->validate([
            'nome' => 'required|max:255',
            'descricao' => 'nullable',
            'preco' => 'required|numeric|min:0',
            'quantidade' => 'required|integer|min:0'
        ]);

        //Atualiza o produto no banco de dados
        $produto->update($request->all());

        // Redireciona para a lista de produtos com a mensagem de sucesso
        return redirect()->route('produtos.index')
                         ->with('success', 'Produto atualizado com sucesso.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Produto $produto)
    {
        // Remove o produto do banco de dados
        $produto->delete();

        //Redireciona para a lista de produtos com a mensagem de sucesso

        return redirect()->route('produtos.index')
                        ->with('success', 'Produto removido com sucesso');
    }
}
