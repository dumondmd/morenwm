<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
     protected $fillable = [
        'nome',
        'cpf',      
        'rg',    
        'email',
        'telefone',
        'data_nascimento',      
        'cep',
        'rua',
        'numero',
        'quadra',
        'lote',
        'complemento',
        'bairro',
        'cidade',       
        'uf_selected',
        'sexo_selected',
        'idioma_selected', 
     ];
}
