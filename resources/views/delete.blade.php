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
    <form action="{{ route('excluir_produto', ['id' => $produto->id]) }}" method="POST">
        @csrf
        <label for="">Tem certeza que deseja excluir?</label> <br>
        <input type="text" name="nome" value="{{ $produto->nome }}" disabled readonly> <br>
        <button type="submit" class="btn btn-primary mb-3">Sim</button>
    </form>
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