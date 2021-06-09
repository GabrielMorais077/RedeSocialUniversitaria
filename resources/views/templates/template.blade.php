<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>UaiZap</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" style="text/css" href="{{url("assets/js/style.css")}}">
</head>
<body>
  <nav id="nav_bar"class="navbar navbar-expand-lg navbar-light bg-light ">
    <a id="butons"class=" btn btn-lg "  href="/books">UaiZap</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        @guest
        <li class="nav-item active">
          <a  id="cor" class="nav-link" href="#">Postagens<span class="sr-only">(current)</span></a>
        </li>
            
        @endguest
        
        @auth
        <li class="nav-item">
          <a  id="cor" class="nav-link" href="/postagens">Criar Postagens</a>
        </li>
        <li class="nav-item">
          <a  id="cor" class="nav-link" href="/dashboard">Meus Eventos</a>
        </li>

        <li class="nav-item">
         <form id="cor" action="/logout" method="POST">
        @csrf
        <a id="cor" href="/logout" class="nav-link" onclick="event.preventDefault(); this.closest('form').submit()">Sair</a>
      </form>
        </li>
        
        @endauth
        @guest
            
      
        <li class="nav-item">
          <a id="cor" class="nav-link" href="/login">Logar</a>
        </li>
        <li class="nav-item">
          <a  id="cor" class="nav-link" href="/register">Cadastrar</a>
        </li>
        @endguest
        <li class="nav-item dropdown">
          <a  id="cor" class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" >
            Dropdown
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li>
        <li class="nav-item">
          <a  id="cor" class="nav-link disabled" href="#" tabindex="-1" >Fórum de duvidas</a>
        </li>
      </ul>
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>
  </nav>
    @yield('content')
    
    <script src="{{url("assets/js/javascript.js")}}"></script>
</body>
</html>