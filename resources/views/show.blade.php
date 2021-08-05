@extends('layouts.main')
@section('title', 'Lista de produtos')
@section('content')



<?php
    if (isset($mensagem)) // SE A VARIÁVEL EXISTIR
        echo '<script type="text/javascript">alert("'.$mensagem.'");</script>';    
?>

<div class="container">  
    <h1>Lista de Produtos</h1>
    
    <a class="a-link" href="/produtos/novo"><button class="btn btn-primary mb-3">Novo Produto</button></a>
            
    <div class="row">
        <table class="table">
            
            <tr>            
                <td class="headTable">Id</td>
                <td class="headTable">Nome</td>
                <td class="headTable">Custo</td>
                <td class="headTable">Preço</td>
                <td class="headTable">Cor</td>
                <td class="headTable">Quantidade</td>
                <td class="headTable">Criado em </td>
                <td class="headTable">Editado em</td>            
            </tr>
            
            @foreach($produtos as $produto)
            
                <tr>                
                    <td>{{$produto -> id}}</td>
                    <td>{{$produto -> nome}}</td>
                    <td>R$  {{str_replace('.',',',$produto->custo)}}</td>
                    <td>R$  {{str_replace('.',',',$produto->preco)}}</td>
                    <td> <div style="height: 30px;width:30px;background-color: <?= $produto -> cor?>;border-radius:2px;"></div></td>
                    <td>{{$produto -> quantidade}}</td>
                    <td>{{ substr($produto -> created_at, -11,2)}}/{{ substr($produto -> created_at, -14,2)}}/{{ substr($produto -> created_at, -19,4)}}</td>
                    <td>{{ substr($produto -> updated_at, -11,2)}}/{{ substr($produto -> updated_at, -14,2)}}/{{ substr($produto -> updated_at, -19,4)}}</td>  
                    <td><a class="a-link" href="/produtos/editar/{{$produto->id}}"><button class="btn btn-primary mb-3"><ion-icon name="create-outline"></ion-icon></button></a></td>
                    <td><a class="a-link" href="/produtos/excluir/{{$produto->id}}"><button class="btn btn-danger mb-3"><ion-icon name="trash-bin-outline"></ion-icon></button></a></td>
                </tr>
            @endforeach
        </table>
    </div>
</div>
@endsection