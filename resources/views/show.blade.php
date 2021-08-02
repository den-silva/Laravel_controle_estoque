@extends('layouts.main')
@section('title', 'Criar produto')
@section('content')

<div class="container">
    <?php while() {?>
    <div class="row">
        <div clas="col-md-6">
            {{ $produto ->nome}}
        </div>
        <div clas="col-md-6">
            {{ $produto ->custo}}
        </div>
        <div clas="col-md-6">
            {{ $produto ->preco}}
        </div>
        <div clas="col-md-6">
            {{ $produto ->nome}}
        </div>
    </div>
    <?php }?>
</div>

    @endsection
