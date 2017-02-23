<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Cambalachea</title>

        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/app.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

    </head>

    <body>

        <!-- Header -->
        <header class="header">
            <div class="text-vertical-center">
                <img class="img-responsive img-center" src="img/logo.png" alt="">
                <form class="form-horizontal" role="form" method="POST" action="{{ url('/subscribe') }}">
                {{ csrf_field() }}
                    <h1>¿Quieres saber mas? </h1>
                    <h2>Ingresa tu correo</h2>
                    <br>
                        <input name="email" class="btn btn-dark btn-lg"  > </input>
                        <button type="submit"  class="btn btn-dark btn-lg">Enviar</button>
                    <br>    
                </form>
            </div>
        </header>


    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    </body>
</html>
