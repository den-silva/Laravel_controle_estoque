@extends('layouts.main')
@section('title', 'Excluir produto')
@section('content')
       
    <div class="col-md-4 offset-4">
        <h1>Excluir produto</h1> <br>
        <button class="btn btn-primary mb-3"><a class="a-link" href="/produtos/ver"><ion-icon name="arrow-back-outline"></ion-icon></a></button>
        <div class="row justify-content-md-center">
            <form action="{{ route('excluir_produto', ['id' => $produto->id]) }}" method="POST">
                @csrf
                <label for="">Tem certeza que deseja excluir?</label> <br>
                <input type="text" name="nome" value="{{ $produto->nome }}" disabled readonly> <br><br>
                <button type="submit" class="btn btn-primary mb-3">Sim</button>
            </form>
        </div>  
    </div>
</body>
</html>
@endsection