@extends('layouts.main')
@section('title', 'Criar produto')
@section('content')
    <div class="col-">
    
    </div>    
    <div class="container-sm">
        <div class= "col-md-4 offset-4">
            <h1>Cadastre aqui seu Produto</h1>
            <a href="/produtos/ver">Voltar</a>
            <form action="{{ route('registrar_produto')}}" method="POST">
                @csrf
                <div>
                    <label for="">Nome</label> <br>
                    <input type="text" name="nome" class="form-control"> <br>
                    <div class="row g-3">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="">Custo</label> <br>
                                <input type="text" name="custo" class="form-control" > <br>
                            </div>
                            
                            <div class="col-md-6">
                                <label for="">Preço</label> <br>
                                <input type="text" name="preco" class="form-control" > <br>
                            </div>
                        </div>
                    </div>
                    <label for="">Cor</label> <br>
                    <input type="text" name="cor" class="form-control"> <br>

                    <label for="">Quantidade</label> <br> <br> 
                    <div class="row">
                        
                        <div class="col-3">
                            <input type="number" name="quantidade" class="form-control" id="txtqtd" value=0> <br>
                        </div>                       
                    </div>                    
                </div>                
                <button type="submit" class="btn btn-primary mb-3">Salvar</button>
            </form> 
        </div>        
    </div>
@endsection