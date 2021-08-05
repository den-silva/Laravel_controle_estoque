@extends('layouts.main')
@section('title', 'Criar produto')
@section('content')
      
    <div class="container-sm">
        <div class= "col-md-4 offset-4">
            <h1>Cadastre aqui seu Produto</h1>
            <a class="a-link" href="/produtos/ver"><button class="btn btn-primary mb-3"><ion-icon name="arrow-back-outline"></ion-icon></button></a>
            <form action="{{ route('registrar_produto')}}" method="POST">
                @csrf
                <div>
                    <label for="">Nome</label> <br>
                    <input type="text" name="nome" class="form-control"> <br>
                    <div class="row g-3">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="">Custo</label> <br>
                                <input type="text" name="custo" class="form-control" id="custo"> <br>
                            </div>
                            
                            <div class="col-md-6">
                                <label for="">Preço</label> <br>
                                <input type="text" name="preco" class="form-control" id="preco"> <br>
                            </div>


                        </div>
                    </div>
                    <div class="col-md-3">
                        <label for="">Cor</label> <br>
                        <input type="color" name="cor" class="form-control colorSelector" id="cor"> <br>
                    </div>
                    

                    <label for="">Quantidade</label> <br> <br> 
                    <div class="row">
                        
                        <div class="col-3">
                            <input type="number" name="quantidade" class="form-control" id="txtqtd" value=0> <br>
                        </div>                       
                    </div>                    
                </div>                
                <button type="submit" class="btn btn-primary mb-3">Salvar <ion-icon name="checkmark-outline"></ion-icon></button>
            </form> 
        </div>        
    </div>

    <script>
        VMasker(document.getElementById("custo")).maskMoney(); 
        VMasker(document.getElementById("preco")).maskMoney();         
    </script>
@endsection