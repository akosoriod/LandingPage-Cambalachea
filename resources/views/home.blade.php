@extends('layouts.app')

@section('content')
<body>

        <!-- Header -->
        <header class="header">
            <div class="text-vertical-center">
                <img class="img-responsive img-center" src="img/logo.png" alt="">
                         
                           <div  class="list">
                           @foreach($Emails as $Email)
                                 {{$Email->email}}, 
                            @endforeach
                           </div>
                        
            </div>
        </header>


    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    </body>
@endsection
