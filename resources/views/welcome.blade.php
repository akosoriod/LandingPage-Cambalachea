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
                <img class=" col-xs-9 img-responsive img-center" src="img/logo.png" alt="">
                <form  role="form" method="POST" action="{{ url('/subscribe') }}">
                {{ csrf_field() }}
                    
                    <h1 class=" col-xs-9 text-center">¿Para qué el dinero si puedes usar tu tiempo?</h1>
                    <h1 class=" col-xs-9 space1">Comparte lo que sabes, aprende lo que quieras.</h1>

                    <h3 class="col-xs-offset-1 col-xs-9 ">¿Quieres saber más? </h3>
                    <h3 class="col-xs-offset-1 col-xs-9 space ">Ingresa tu correo</h3>
                    
                    <div class="row">
                        <input name="email" class="col-md-offset-4 col-xs-offset-2 col-md-4 col-xs-9 btn btn-dark btn-lg"  > </input>
                    </div>
                     <div class="row">
                        <button type="submit"  class="col-md-2 col-md-offset-5 col-xs-3 btn btn-green btn-lg col-xs-offset-5">Enviar
                        </button>
                        </form>
                   </div>   
                </form>
            </div>
        </header>


    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    </body>
</html>
