@extends('layouts.main')
@section('title', 'Alterar produto')
@section('content')
    <script>
            var num = 0;
            function adicionar(){
                var num = document.getElementById("txtqtd");
                return num ++;
            }
            function remover(){
                var num = document.getElementById("txtqtd");
                num --;
                if(num == 0){
                    return 0;
                }
                return num;
            }
    </script>
    <div class="container-sm">

        <div class= "col-md-4 offset-4"> 
            <h1>Edite seu Produto</h1>  <br>
            <a class="a-link" href="/produtos/ver"><button class="btn btn-primary mb-3"><ion-icon name="arrow-back-outline"></ion-icon></button></a>
            <form action="{{ route('alterar_produto', ['id' =>$produto->id])}}" method="POST">
                @csrf
                <div>
                    <label for="">Nome</label> <br>
                    <input type="text" name="nome" value="{{ $produto->nome }}" class="form-control"> <br>
                    <div class="row g-3">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="">Custo</label> <br>
                                <input type="text" name="custo" value="{{str_replace('.',',',$produto->custo)}}"class="form-control" id="money"> <br>
                            </div>
                            
                            <div class="col-md-6">
                                <label for="">Preço</label> <br>
                                <input type="text" name="preco" value="{{str_replace('.',',',$produto->preco)}}"class="form-control" id="money"> <br>
                            </div>
                        </div>
                        
                    </div>
                    <label for="">Cor</label> <br>
                    <input type="color" name="cor" value="{{$produto->cor}}"class="form-control colorSelector"> <br> 

                    <label for="">Quantidade</label> <br> <br> 
                        <div class="row">
                            <!--<div class="col-2">
                                <button class="btn btn-primary mb-3" id="adicionar" onclick="adicionar()"><ion-icon name="add-outline"></ion-icon></button>
                            </div>-->

                            <div class="col-3">
                                <input type="number" name="quantidade" class="form-control" id="txtqtd" value="{{$produto->quantidade}}"> <br>
                            </div>

                            <!--<div class="col-2">
                                <button class="btn btn-primary mb-3" id="remover" onclick="remover()"><ion-icon name="remove-outline"></ion-icon></button>
                            </div> -->
                        </div>
                </div>
                
                <button type="submit" class="btn btn-primary mb-3">Alterar Dados</button>
            </form>    
        </div>        
    </div>
</body>
</html>

@endsection