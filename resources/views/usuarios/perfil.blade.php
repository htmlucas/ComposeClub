<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/bootstrap-4.5.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/estilo.css">
    <link REL="SHORTCUT ICON" HREF="../assets/img/log1.png">
    <title>Compose Club</title>
</head>
<body>

    @if(session()->has('msg_success'))
        <div class="row mt-3 mb-3">
            <div class="col-12">
                <div class="alert alert-success" role="alert">
                    {{session()->get('msg_success')}}
                </div>
            </div>
        </div>
    @endif
        
    <h1>Bem vindo {{ auth()->user()->nomedeusuario }} </h1>
    <a href="{{ route('login.logout')}}" class="btn btn-danger">Sair</a>
    <a href="{{ route ('composicoes.create')}}" class="btn btn-primary">Criar uma nova composição</a>
    <a href="{{ route('composicoes.index')}}" class="btn btn-success">Acessar suas composicoes</a>




    <script src="../assets/bootstrap-4.5.3-dist/js/jquery-3.5.1.min.js"></script>
    <script src="../assets/bootstrap-4.5.3-dist/js/bootstrap.min.js"></script>
    <script src="../assets/bootstrap-4.5.3-dist/js/popper.min.js"></script> 
</body>
</html>