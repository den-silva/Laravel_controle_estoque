@extends('layouts.main')
@section('title', 'Lista de produtos')
@section('content')

<div class="container">  
    <h1>Lista de Produtos</h1>
    <div class="row">
        <table>
            <tr>
                <td><button class="btn btn-primary mb-3"><a class="a-link" href="/produtos/novo">Novo Produto</a></button></td>
            </tr>
            <tr>            
                <td>Id</td>
                <td>Nome</td>
                <td>Custo</td>
                <td>Preço</td>
                <td>Cor</td>
                <td>Quantidade</td>
                <td>Criado em </td>
                <td>Editado em</td>            
            </tr>
            <hr>
            @foreach($produtos as $produto)

                <tr>
                    <td>{{$produto -> id}}</td>
                    <td>{{$produto -> nome}}</td>
                    <td>{{$produto -> custo}}</td>
                    <td>{{$produto -> preco}}</td>
                    <td>{{$produto -> cor}}</td>
                    <td>{{$produto -> quantidade}}</td>
                    <td>{{$produto -> created_at}}</td>
                    <td>{{$produto -> updated_at}}</td>    
                    <td><button class="btn btn-primary mb-3"><a class="a-link" href="/produtos/editar/{{$produto->id}}">editar</a></button></td>
                    <td><button class="btn btn-danger mb-3"><a class="a-link" href="/produtos/excluir/{{$produto->id}}">excluir</a></button></td>                

                </tr>
            @endforeach
        </table>
    </div>
</div>
@endsection