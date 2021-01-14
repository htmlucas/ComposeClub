<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/bootstrap-4.5.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/estilo.css">
    <link REL="SHORTCUT ICON" HREF="assets/img/log1.png">
    <title>Compose Club</title>
</head>
<body id="backgroundzin">
    <div  class="container">
                <div  class="d-flex col-10 offset-2 col-md-3 offset-md-9 align-items-center" style="height: 80vh;">
                    <div class="card mt-2" style="width: 18rem;">
                        <div class="card-body  ">
                                <div class="form-group ">
                                    <div class="panel-heading">
                                        @if(session()->has('msg_success')) 
                                        <div class="row">
                                            <div class="col-12 alert alert-success" role="alert">
                                                {{ session()->get('msg_success') }}
                                            </div>
                                        </div>
                                        @endif
                                        <div class="d-flex justify-content-between align-items-center  ">                                         
                                            <a href="#" class="active" id="login-form-link">Logar</a>
                                            <a href="#" id="register-form-link">Cadastrar</a>
                                        </div>
                                        <hr>
                                    </div>
                                    <div class="panel-body">
                                        <form action="{{ url('/create') }}" id="login-form" method="POST">
                                            <!--formulario de logar--> 
                                            <div class="col form-group ">
                                                <input type="text" name="nomedeusuario" id="name"  class="form-control" placeholder="Email">
                                            </div>
                                            <div class="col form-group">
                                                <input type="password" name="senha" id="password" class="form-control" placeholder="Senha">
                                            </div>
                                            <div class="d-flex justify-content-center">
                                                <button type="submit" class="btn btn-primary ">Entrar</button>
                                            </div>
                                        </form>        
                                    <form action="{{ route('usuario.store') }}" id="register-form" method="POST" style="display: none;"> 
                                        @csrf
                                        <!--Formulario de criação de conta-->
                                        <div class="form-group">
                                            <input type="text" name="nome_completo" id="nome"  class="form-control" placeholder="Nome Completo" value="">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="nomedeusuario" id="nick"  class="form-control" placeholder="Nome de Usuário" value="">
                                        </div>
                                        <div class="form-group">
                                            <input type="email" name="email" id="email"  class="form-control" placeholder="E-mail" value="">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" name="senha" id="senha" class="form-control" placeholder="Senha">
                                        </div>
                                        <div class="form-group">
                                                <div class="d-flex justify-content-center">
                                                    <button type="submit" class="btn btn-primary pl-4 pr-4 pt-2 pb-2">Enviar</button>
                                                </div>     
                                        </div>
                                    </form>
                                    <hr>
                                    </div>           
                                </div>
                        </div>
                    </div>
                </div>

    </div>

   


    <script src="assets/bootstrap-4.5.3-dist/js/jquery-3.5.1.min.js"></script>
    <script src="assets/bootstrap-4.5.3-dist/js/bootstrap.min.js"></script>
    <script src="assets/bootstrap-4.5.3-dist/js/popper.min.js"></script> 
    <script>
 $(document).ready(function(){
   
   $(function() {
       $('#login-form-link').click(function(e) {
           $("#login-form").delay(100).fadeIn(100);
           $("#register-form").fadeOut(100);
           $('#register-form-link').removeClass('active');
           $(this).addClass('active');
           e.preventDefault();
       });
       $('#register-form-link').click(function(e) {
           $("#register-form").delay(100).fadeIn(100);
           $("#login-form").fadeOut(100);
           $('#login-form-link').removeClass('active');
           $(this).addClass('active');
           e.preventDefault();
       });
   });
});

    </script>  
</body>
</html>