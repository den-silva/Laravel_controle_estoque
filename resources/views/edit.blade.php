@extends('layouts.main')
@section('title', 'Alterar produto')
@section('content')
    
    <div class="container-sm">
        <form action="{{ route('alterar_produto', ['id' =>$produto->id])}}" method="POST">
            @csrf
            <div>
                <label for="">Nome</label> <br>
                <input type="text" name="nome" value="{{ $produto->nome }}" class="form-control"> <br>
                <div class="row g-3">
                    <div class="col-auto">
                        <label for="">Custo</label> <br>
                        <input type="text" name="custo" value="{{str_replace('.',',',$produto->custo)}}"class="form-control" id="money"> <br>
                    </div>
                    
                    <div class="col-auto">
                        <label for="">Preço</label> <br>
                        <input type="text" name="preco" value="{{str_replace('.',',',$produto->preco)}}"class="form-control" id="money"> <br>
                    </div>
                </div>
                <label for="">Cor</label> <br>
                <input type="text" name="cor" value="{{$produto->cor}}"class="form-control"> <br> 

                <label for="">Quantidade</label> <br>
                <input type="text" name="quantidade" value="{{$produto->quantidade}}"class="form-control"> <br>
            </div>
            
            <button type="submit" class="btn btn-primary mb-3">Alterar Dados</button>
        </form>    

    </div>
</body>
</html>

@endsection