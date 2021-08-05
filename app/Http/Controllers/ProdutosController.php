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
        $mensagem = "Produto cadastrado com sucesso!";
        $produtos = Produto::all();
        return view('show', ['produtos' =>$produtos, 'mensagem'=> $mensagem]);
    }

    public function show(){
        
        $produtos = Produto::all();
        return view('show', ['produtos' =>$produtos]);
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
            'preco' => str_replace(",",".",$request->preco), 
            'cor' => $request->cor,
            'quantidade' => $request->quantidade,
        ]);
        $mensagem = "Produto alterado com sucesso!";
        $produtos = Produto::all();
        return view('show', ['produtos' =>$produtos, 'mensagem'=> $mensagem]);
    }

    public function delete($id){
        $produto = Produto::findOrFail($id);
        return view('delete', ['produto' =>$produto]);
    }

    public function destroy($id){
        $produto = Produto::findOrFail($id);
        $produto->delete();
         
        
        $mensagem = "Produto excluido com sucesso";
        $produtos = Produto::all();
        return view('show', ['produtos' =>$produtos, 'mensagem'=> $mensagem]);
    }

    public function about(){
        return view('about');
    }
}
