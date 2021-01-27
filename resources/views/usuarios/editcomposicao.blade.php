<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/bootstrap-4.5.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/estilo.css">
    <link REL="SHORTCUT ICON" HREF="/assets/img/log1.png">
    <title>Compose Club</title>
    <script src="https://cdn.tiny.cloud/1/jsfi6p2g66ydz0p1754mpnoeidc2dc39q9hnlkjtshsrhqrs/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
</head>
<body>
    <script>
        tinymce.init({
          selector: 'textarea',
          plugins: 'advlist autolink lists link image charmap print preview hr anchor pagebreak',
          anchor_bottom: '#mybottom',
          anchor_top: '#mytop',
          toolbar_mode: 'floating',
       });
      </script>  

      <h1>Bem vindo {{ auth()->user()->nomedeusuario }} </h1>
      <a href="{{ route('login.logout')}}" class="btn btn-danger">Sair</a>
      <a href="{{route('dashboard.index')}}" class="btn btn-secondary">Voltar ao dashboard</a>  


    @if($errors)
        @foreach($errors->all() as $error)
            <div class="alert alert-danger">{{$error}}</div>
        @endforeach
    @endif

      <div class="container">
        <form action="{{route('composicoes.update',$composicoes->id)}}" method="POST">
        @csrf
        @method('PUT') 

        <div class="form-row">
            <div class="col-sm-3 form-group">
                <label for="titulo">Titulo</label>
                <input type="text" class="form-control" id="titulo" name="titulo" value="{{ old ('titulo',$composicoes->titulo)}}">
            </div>
            <div class="col form-group">
                <label for="categoria">Selecione a Categoria da Composição</label>
                <select name="categoria" id="categoria" class="form-control">
                    <option @if ($composicoes->categoria == 'POP'){{ 'selected'}} @endif  value="POP">POP</option>
                    <option @if ($composicoes->categoria == 'R&B'){{'selected'}} @endif value="R&B">R&B</option>
                    <option @if ($composicoes->categoria == 'ROCK'){{'selected'}} @endif value="ROCK">ROCK</option>
                    <option @if ($composicoes->categoria == 'SAMBA'){{'selected'}} @endif value="SAMBA">SAMBA</option>
                    <option @if ($composicoes->categoria == 'PAGODE'){{'selected'}} @endif value="PAGODE">PAGODE</option>
                    <option @if ($composicoes->categoria == 'MPB') {{'selected'}} @endif value="MPB">MPB</option>
                    <option @if ($composicoes->categoria == 'RAP') {{'selected'}} @endif value="RAP">RAP</option>
                    <option @if ($composicoes->categoria == 'SERTANEJO'){{'selected'}} @endif value="SERTANEJO">SERTANEJO</option>
                </select>
            </div>
        </div> 
        <div class="form-row">
            <div class="col-sm form-group">
                <label for="texto">Letra da Música:</label>
                    <textarea name="texto"  id="texto" class="form-control" >
                        {{$composicoes->texto}}
                    </textarea>      
                    
            </div>    
        </div>
        <div class="form-row">
            <span>Informações Adicionais</span>
            <hr>
        </div>
        <div class="form-row">
            <div class="col-sm-4">
                <label for="participacao">Participação</label>
                <input type="text" id="participacao" value="{{old('participacao',$composicoes->participacao)}}" name="participacao" class="form-control">
            </div>
            <div class="col-sm-4">
                <label for="produzido">Produzido</label>
                <input type="text" id="produzido" value="{{old('produzido',$composicoes->produzido)}}" name="produzido" class="form-control">
            </div>
            <div class="col-sm-4">
                <label for="escrito">Escrito</label>
                <input type="text" id="escrito" value="{{old('escrito',$composicoes->escrito)}}" name="escrito" class="form-control">
            </div>
        </div>
        <div class="form-row">
            <div class="col-sm-6">
                <label for="soundcloud">soundcloud</label>
                <input type="text" id="soundcloud" value="{{old('soundcloud',$composicoes->soundcloud)}}" name="soundcloud" class="form-control">
            </div>
            <div class="col-sm-6">
                <label for="youtube">youtube</label>
                <input type="text" id="youtube" value="{{old('youtube',$composicoes->youtube)}}" name="youtube"  class="form-control">
            </div>
        </div>
        <div class="form-row">
            <button type="submit" class="btn btn-success btn-block mt-2">Enviar</button>
        </div>
    </form>
</div>








    
    <script src="/assets/bootstrap-4.5.3-dist/js/jquery-3.5.1.min.js"></script>
    <script src="/assets/bootstrap-4.5.3-dist/js/bootstrap.min.js"></script>
    <script src="/assets/bootstrap-4.5.3-dist/js/popper.min.js"></script>     
</body>
</html>