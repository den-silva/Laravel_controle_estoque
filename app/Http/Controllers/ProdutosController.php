<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;

class ProdutosController extends Controller
{
    Public function create(){
        return view('create');
    }

    Public function store(Request $request){
        Produto::create([
            'nome' => $request->nome,
            'custo' => str_replace(",",".",$request->custo),
            'preco' =>  str_replace(",",".",$request->preco), 
            'quantidade' => $request->quantidade,
            'cor' => $request->cor,

        ]);
        echo "Produto cadastrado com sucesso!";
        return view('create');


    }

    public function show($id){
        $produto = Produto::findOrFail($id);
        return view('show', ['produto'=> $produto]);
    }

    public function edit($id){
        $produto = Produto::findOrFail($id);
        return view('edit', ['produto' => $produto]);
    }

    public function update(Request $request, $id){
        $produto = Produto::findOrFail($id);

        $produto->update([
            'nome' => $request->nome,
            'custo' => str_replace(",",".",$request->custo),
            'preco' =>  str_replace(",",".",$request->preco), 
            'cor' => $request->cor,
            'quantidade' => $request->quantidade,
        ]);
        echo "Produto alterado com sucesso!";
        return view("welcome");
    }

    public function delete($id){
        $produto = Produto::findOrFail($id);
        return view('delete', ['produto' =>$produto]);
    }

    public function destroy($id){
        $produto = Produto::findOrFail($id);
        $produto->delete();
         
        
         echo "Produto excluido com sucesso";
         return view('welcome');
    }
}
