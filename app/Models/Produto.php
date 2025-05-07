<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    use HasFactory;

    //Campos que poder ser preenchidos em massa (mass assingnment)
    protected $fillable = ['nome','drescricao', 'preco', 'quantidade'];
}
