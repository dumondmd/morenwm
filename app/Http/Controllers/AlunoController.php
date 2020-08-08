<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Aluno;

class AlunoController extends Controller
{
    
    public function index()
    {
        return view('aluno');
    }

    
    public function store(Request $request)
    {        
        Aluno::create($request->all());
        return response()->json('Aluno adicionado com sucesso!');
    }

    
    public function showId($id)
    {
        return Aluno::findOrFail($id);
    }
    
    public function showAtivos()
    {
        return Aluno::whereNull('deleted_at')->get();       
    }

    public function showExcluidos()
    {
        return Aluno::whereNotNull('deleted_at')->get();     
    }

    
    public function update(Request $request, $id)
    {
        $aluno = Aluno::findOrFail($id);
        $aluno->update($request->all());
        return response()->json('Aluno atualizado com sucesso!');        
    }

    public function delete($id)
    {
        $exclusao = date('Y-m-d H:i:s');                      
        $aluno = Aluno::findOrFail($id);
        if(isset($aluno)){
            $aluno->deleted_at = $exclusao;            
            $aluno->save();
            return response()->json("Aluno de id: ".$id." excluido com sucesso! Hora exclusao ".$exclusao);
        }
        return response('Aluno não encontrado', 404);
    }   
}
