<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="collapse navbar-collapse" id="navbar">
                
                <div class="container-md">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="/produtos/novo" class="nav-link">Cadastrar</a>
                        </li>
                        <li class="nav-item">
                            <a href="/produtos/editar/{{$produto->id}}" class="nav-link">Atualizar</a>
                        </li>

                        <li class="nav-item">
                            <a href="/produtos/excluir/{{$produto->id}} " class="nav-link">Deletar </a>
                        </li>
                    </ul>
                </div>               
                
            </div>
        </nav>
    </header>


    
    <div class="container-sm">
        <form action="{{ route('alterar_produto', ['id' =>$produto->id])}}" method="POST">
            @csrf
            <div>
                <label for="">Nome</label> <br>
                <input type="text" name="nome" value="{{ $produto->nome }}" class="form-control"> <br>
                <div class="row g-3">
                    <div class="col-auto">
                        <label for="">Custo</label> <br>
                        <input type="text" name="custo" value="{{$produto->custo}}"class="form-control" id="money"> <br>
                    </div>
                    
                    <div class="col-auto">
                        <label for="">Preço</label> <br>
                        <input type="text" name="preco" value="{{$produto->preco}}"class="form-control" id="money"> <br>
                    </div>
                </div>
                
                <!--

                <label for="">Cor</label> <br>
                <input type="text" name="cor" value="{{$produto->preco}}"class="form-control"> <br> -->

                <label for="">Quantidade</label> <br>
                <input type="text" name="quantidade" value="{{$produto->quantidade}}"class="form-control"> <br>
            </div>
            
            <button type="submit" class="btn btn-primary mb-3">Salvar</button>
        </form>    

    </div>
    <script>
    $(document).ready(function(){
    $("#money").inputmask('decimal', {
                'alias': 'numeric',
                'groupSeparator': ',',
                'autoGroup': true,
                'digits': 2,
                'radixPoint': ".",
                'digitsOptional': false,
                'allowMinus': false,
                'prefix': 'R$ ',
                'placeholder': ''
    });
</script>
</body>
</html>