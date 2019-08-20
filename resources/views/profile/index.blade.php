
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title></title>

    <!-- Scripts -->
    <!-- Fonts -->
    <link href="{{ asset('css/profile.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
    <!-- Latest compiled and minified CSS -->
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

   <!-- jQuery library -->
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

   <!-- Latest compiled JavaScript -->
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    
</head>
    

        <nav class="navbar navbar-inverse " style="padding: 0px !important" role = "navigation">
                <div class="container-fluid" style="padding: 0px !important">
                    <div class="navbar-header navbar-right text-center" 
                         style="background-color:cornflowerblue;">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            
                        </button>
                        
                        <a class="navbar-brand center-block " 
                           style="display: block;margin-left: auto;margin-right: auto;color:greenyellow;" 
                           href="#">gamestubbe</a>
                        
                    </div>
                    
                    <ul class="nav navbar-nav navbar-right" style=""> 
                         <li class=""><a href="#">Page 2</a></li>
                         <li class=""><a href="#">Page 1</a></li>
                         <li class=""><a href="#">Home</a></li>
                    </ul>
                    
 
                </div>
                
                
            </nav>
            

    
        <section class="main-menu">
            <nav class="navbar navbar-default" role="navigation">
                <div class="container">
                    <div class="dropdown">
                       <button class="btn btn-info dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false" style="float:left;"> {{ $user -> email }}
                            <span class="caret"></span>
                       </button>
                        
                       <ul class="dropdown-menu nav navbar-nav" role="menu1" 
                           aria-labelledby="menu">
                           <li role="presentation"> 
                               <a role="menuitem" href="{{ route('logout') }}">
                                   خروج
                               </a>
                           </li>
                           
                       </ul>
                    
                    </div>
                    
                    <ul class="nav navbar-nav btn-group navbar-right">
                        <li class="pr-2">
                            <p class="navbar-btn" style="font-size:20px;">
                                <a href="{{ route('make-question') }}">
                                    ایجاد پرسش
                                </a>
                            
                            </p>
                        
                        </li>
                        
                        <li style="padding-left:15px;">
                            <p class="navbar-btn" style="font-size:20px;">
                                <a href="{{ route('show-my-question') }}">
                                    پرسش های شما
                                </a>
                            
                            </p>
                        
                        </li>
                    
                    </ul>
                
                </div>
            
            
            </nav>
            
            @if(Session::has('message'))
<p class="alert {{ Session::get('alert-class', 'alert-info') }}">
    {{ Session::get('message') }}
</p>
@endif
    
    
        </section>
    
    
<!--
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>
                     <p>
                         <a class="btn btn-danger" 
                            href="{{ route('logout') }}"> خروج </a>
                    </p>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <h1> {{ $user -> id }}   </h1>
                    <h2> {{ $user -> email }}   </h2>
                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
-->



