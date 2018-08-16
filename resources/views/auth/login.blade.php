<!DOCTYPE html>
<html lang="es">
<head>
    <title>LogIn</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">


    <!-- Compiled and minified JavaScript -->


</head>
<body class="cover" style="background-image: url({{asset('Imagenes/loginFont.jpg')}});">
<form action="{{route('login')}}" method="post" autocomplete="off" class="full-box logInForm">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <p class="text-center text-muted"><i class="zmdi zmdi-account-circle zmdi-hc-5x"></i></p>
    <p class="text-center text-muted text-uppercase">Inicia sesión con tu cuenta</p>
    <div class="form-group label-floating">
        <label class="control-label" for="UserEmail">E-mail</label>
        <input   class="form-control" name="email"  required="Campo Obligatorio"  id="usuarios" type="email">
        <p class="help-block">Escribe tú E-mail</p>
    </div>
    <div class="form-group label-floating">
        <label class="control-label" for="UserPass">Contraseña</label>
        <input class="form-control" id="Password" name="password" required="Campo Obligatorio" type="password">
        <p class="help-block">Escribe tú contraseña</p>
    </div>
    <div class="form-group text-center">
        <input type="submit" value="Iniciar sesión" class="btn btn-raised btn-danger">
    </div>
</form>
<!--====== Scripts -->

</body>
</html>