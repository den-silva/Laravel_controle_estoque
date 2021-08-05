<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <style>
        .footer{
            height: 80px;
            color: #9a9b9c;
            background: #212429;
            padding: 15px;
            bottom: 0;
            width: 100%;
            position: relative;
        }
        .a-link{
            text-decoration: none;
            color: white;
        }
    </style>
    
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #212429;">
            <div class="collapse navbar-collapse" id="navbar">
                
                <div class="container-md">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="/" class="nav-link">Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="/produtos/ver" class="nav-link">Produtos</a>
                        </li>

                        <li class="nav-item">
                            <a href="/sobre" class="nav-link">Sobre</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>   
    @yield('content')   
    <script src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <footer >
        <div class="footer">
            <div class="row-expand-lg">
                <div class="col-md-12">  
                    <div class="container">
                        <p>Controle de Estoque &copy 2021</p>
                    </div>
                    
                </div>    
            </div>    
        </div>
    </footer>
</body>
</html>