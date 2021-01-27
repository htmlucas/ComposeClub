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
    <h1>Bem vindo {{ auth()->user()->nomedeusuario }} </h1>
    <a href="{{ route('login.logout')}}" class="btn btn-danger">Sair</a>
    <a href="{{ route('composicoes.create')}}" class="btn btn-primary">Criar uma nova composição</a>
    <a href="{{route('dashboard.index')}}" class="btn btn-secondary">Voltar ao dashboard</a>

    <div class="container">
        <div class="row">
            <div class="col">
                <div class="list-group">
                    @foreach($composicoes as $composicao)
                        <a href="" class="list-group-item list-group-item-action d-flex align-items-center">
                            <div class="d-flex flex-column flex-fill justify-content-between">
                                <h5>{{$composicao->usuario->nomedeusuario}} compôs a música: {{$composicao->titulo}}</h5>
                                <p>com participação de {{$composicao->participacao}}</p>                             
                            </div>
                            <span class="d-flex flex-column justify-content-between">
                                <small>{{$composicao->created_at}}</small>                                
                                    <a type="button" class="btn btn-primary" href="{{route('composicao.edit',$composicao->id) }}">Editar</a>
                                    <form action="{{route('composicoes.destroy',$composicao->id)}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button href="" type="submit" class="btn btn-danger">Excluir</button>
                                    </form>                            
                            </span>                           
                        </a>
                    @endforeach    
                </div>
            </div>
        </div>
    </div>
    
    
    <script src="../assets/bootstrap-4.5.3-dist/js/jquery-3.5.1.min.js"></script>
    <script src="../assets/bootstrap-4.5.3-dist/js/bootstrap.min.js"></script>
    <script src="../assets/bootstrap-4.5.3-dist/js/popper.min.js"></script> 
</body>
</html>