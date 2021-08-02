<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield(title)</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
</head>
<body>
    <form action="{{ route('registrar_produto') }}" method="POST">
        @csrf
        <label for="">Nome</label><br>
        <input type="text" name="nome"><br>
        <label for="">Custo</label><br>
        <input type="text" name ="custo"><br>
        <label for="">Preço</label><br>
        <input type="text" name="preco" class="form-control"><br>
        <label for="">Quantidade</label><br>
        <input type="text" name="quantidade"><br>
        <button>Salvar</button>
    </form>
</body>
</html>