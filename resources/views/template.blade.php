<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lista usuarios</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<body>
    
    <!-- Login User-->
    <div class="row">
        <div class="col-md-12">
            @if (Route::has('login'))
            <nav class="navbar navbar-inverse">
                <div class="container-fluid">
                    <ul class="nav navbar-nav navbar-right">
                            @if (Auth::check())
                            <li class="dropdown show">
                                <a class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" > 
                                    {{ Auth::user()->name }} <span class="caret"> </span>
                                </a>

                                <ul class="dropdown-menu">
                                    <li class="dropdown-item"> 
                                        <a href="{{ route('logoutU') }}"> Logout </a> 
                                        
                                    </li>
                                    <li class="dopdown-item"><a href="{{route('viewUpdateU')}}"> Perfil</a></li>
                                    <li class="dopdown-item"><a href="{{route('viewUpdateU')}}"> datos de la Cuenta</a></li>
                                </ul>
                            </li>
                            
                            @else
                                <li> <a href="{{ url('/login') }}"> <span class="glyphicon glyphicon-log-in"> Login </span> </a> </li>
                                <li> <a href="{{ url('/register') }}"><span class="glyphicon glyphicon-user"> Register </span> </a> </li>
                            @endif
                    </ul>
                </div>
            </nav>
    @endif
        </div>
    </div>

<!-- Content of users -->
    @yield('contenido')
</body>
</html>