<?php

use App\Http\Controllers\ProdutoController;
use Illuminate\Support\Facades\Route;

// Rota principal redirecionando para a lista de produtos
Route::redirect('/', '/produtos');

// Define todas as rotas CRUD para o controller

Route::resource('produtos', ProdutoController::class);
