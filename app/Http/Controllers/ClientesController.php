<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;

class ClientesController extends Controller
{
    public function create(){
        return view('create');
    }

    public function store (Request $request){
        Cliente::create([
            'nome' => $request->nome,
            'cpf' => $request->cpf,

            'email' => $request->email,

            'telefone' => $request->telefone,
        ]);
        return "Cliente cadastrado com sucesso!";
    }

    public function show ($id){
        $cliente = Cliente::findOrFail($id);
        return view('clientes.show', ['clientes'=> $cliente]);
    }
    //
}
