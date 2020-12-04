<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">


<head>
<style >
body{
    background-color: #FFFFFF !important;
    font-family:"Roboto" !important;
    color:#FFFFFF !important;
    padding-right: 0 !important ;
    display: flex;
    min-height: 100vh;
    flex-direction: column;
    

}
main{
    flex: 1 0 auto;
}
.navbar-custom { 
    background-color: #353535; 
} 
.navbar-custom .navbar-brand, 
        .navbar-custom .navbar-text { 
            color: #FFFFFF; 
            font-size:14px ;
        } 


        .navbar-custom .navbar-collapse{ 
            
             width:500px !important;
        } 



.btn-custom{
    height:20px !important;
    position:relative !important;
    top:0px !important;
    margin-top:5px !important;
    display:inline !important;

}
.btn-custom2{
    height:30px !important;
    width:80px !important;
    position:relative !important;
    top:0px !important;
    margin-top:5px !important;
    margin-right:5px !important;
    padding:1px !important;

    display:inline !important;

}
.btn-custom3{
    height:30px !important;
    width:100px !important;
    position:relative !important;
    top:0px !important;
    margin-top:5px !important;
    margin-right:5px !important;
    padding:1px !important;

    display:inline !important;

}
img{
  border-radius:0px !important;

}

.card{
  border-radius:5px !important;
 

}
.card-body{
 
    padding:0.6rem !important;
    border-bottom:5px;
    background:#D2D7DF !important;
  
  

}
.card-title{
  color:#14110F !important;

}

.container-custom { 
    color:#14110F;
} 

hr{
        height: 1px !important;
        background-color: #353535;
        border: none;
    }

    .btn-danger {
    color: #fff;
    background-color: #353535 !important;
    border-color: #353535 !important;
} 
.btn-outline-danger {
    color: #FFFFFF !important;
    border-color: #FFFFFF !important;
}

.footer{
  position:fixed;
  left: 0;
  bottom: 0;
  width: 100%;
  background-color:#353535;
  color:#FFFFFF;
  height:30px;
}

#footer {
  position:relative;
	background-color: #353535;
	color: #8A897C;
	font-size: 14px;
	padding-top:10px;
  height:40px;
  bottom:0px;
  left:0px;
  margin-bottom:0px;
  margin-top:100px;

}

</style>



<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>


<body>
<header>
<nav class="navbar navbar-dark fixed-top navbar-custom navbar-expand-lg navbar-default navbar-fixed-top navbar-inverse">
      <div class="container">
        <a class="navbar-brand  navbar-custom lead navbar-text active " href="/">GAMINGHUB</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample07" aria-controls="navbarsExample07" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExample07">
          <ul class="navbar-nav navbar-custom ">
          <li class="nav-item active dropdown">
              <a class="nav-link dropdown-toggle lead navbar-text" href="#" id="dropdown07" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">GAMES</a>
              <div class="dropdown-menu" aria-labelledby="dropdown07">
                <a class="dropdown-item  " href="/genre/action">Action</a>
                <a class="dropdown-item " href="/genre/rpg">RPG</a>
                <a class="dropdown-item " href="/genre/shooter">Shooter</a>
                <a class="dropdown-item " href="/genre/free">Free</a>
                <a class="dropdown-item " href="/genre/adventure">Adventure</a>
              </div>
            </li>
            <li class="nav-item active dropdown">
              <a class="nav-link dropdown-toggle lead navbar-text" href="#" id="dropdown07" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">ELECTRONICS</a>
              <div class="dropdown-menu" aria-labelledby="dropdown07">
                <a class="dropdown-item " href="/type/pc">Desktops</a>
                <a class="dropdown-item " href="/type/laptop">Laptops</a>
                <a class="dropdown-item " href="/type/console">Consoles</a>
                <a class="dropdown-item " href="/type/electronics">Computer Accesories</a>
              </div>
            </li>
          </ul>
          <form action="/search" method="GET" class="form-inline my-2 my-md-0 mr-auto" style="margin-left:50px;">
            <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search" style="width:400px" name="search">
            <button class="btn btn-outline-danger my-2 my-sm-0" type="submit" ><i class="fa fa-search"></i></button>
          </form>
          <ul class="navbar-nav navbar-custom ">
          <li class="nav-item active" >
          <a class="nav-link navbar-text" href="/checkout">
              <svg width="1em" height="1.5em" viewBox="0 0 16 16" class="bi bi-cart-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg" >
              <path fill-rule="evenodd" d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm7 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
              </svg>
              <span class="badge" style="margin:0px">{{Session::has('cart') ?  Session::get('cart')->totalQty:''}}</span>
          </a>
          </li>
          </ul>
          <ul class="navbar-nav ">
          @guest
                           
                            @else
                            @if(Auth::user()->usertype == 'admin')
                            <li class="nav-item dropdown active">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle navbar-text lead" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                   Add
                                   </a>
                                
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown" >
                                    <a class="dropdown-item lead" href="/admin/create/game">
                                     New Game
                                    </a>
                                    <a class="dropdown-item lead" href="/admin/create/product">
                                         New Product
                                    </a>
                                    @endif
          @endguest

                        <!-- Authentication Links -->


                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link navbar-text lead active" href="{{ route('login') }}">{{ __('LOGIN') }}</a>
                                </li>
                            @endif
                            
                            @if (Route::has('register'))
                                <li class="nav-item ">
                                    <a class="nav-link navbar-text lead active" href="{{ route('register') }}">{{ __('REGISTER') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown active">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle navbar-text lead" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item lead" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>




        </div>
      </div>
    </nav>







</header>
<main>

    @yield('content')
</main>
<!-- Footer -->
<footer class="page-footer font-small" style="background:#353535;margin-top:200px;">
<div class="container">
          <div class="footer-content py-3 pt-4 d-flex">
          <div class="leftcontent"style="color:#BDBBB0">
          © 2020 Copyright:
            <a href="https://gaminghub/" style="color:#FFFFFF"> GamingHub.com</a>
          
          </div>
          <div class="ml-auto rightcontent" style="color:#BDBBB0" >
              <ul class="list-inline" >
                <li class="list-inline-item">Follow Us:</li>
                <li class="list-inline-item"><a href="https://www.facebook.com/" class="text-reset"><i class="fa fa-facebook"></i></a></li>
                <li class="list-inline-item"><a href="https://www.youtube.com/" class="text-reset"><i class="fa fa-youtube"></i></a></li>
                <li class="list-inline-item"><a href="https://www.instagram.com/" class="text-reset"><i class="fa fa-instagram"></i></a></li>
                <li class="list-inline-item"><a href="https://twitter.com/" class="text-reset"><i class="fa fa-twitter"></i></a></li>
              </ul>
            </div>
      </div>


</div>
</footer>
<!-- Footer -->


  
 <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>  
</body>



</html>

