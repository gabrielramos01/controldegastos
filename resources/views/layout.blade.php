<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
    <title>@yield('title')</title>
 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<nav class="navbar navbar-default" role="navigation">
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse"
            data-target=".navbar-ex1-collapse">
      <span class="sr-only">Desplegar navegación</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="#">Finanzas Personales</a>
  </div>
  <div class="collapse navbar-collapse navbar-ex1-collapse">
    <ul class="nav navbar-nav">
	<li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
          Ingresos <b class="caret"></b>
        </a>
        <ul class="dropdown-menu">
          <li><a class="nav-item nav-link" href="/ingresos">Registrar ingreso</a></li>
        </ul>
      </li>
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
          Gastos <b class="caret"></b>
        </a>
        <ul class="dropdown-menu">
          <li><a class="nav-item nav-link" href="/gastos">Registrar gastos</a></li>
        </ul>
      </li>
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
          Detalle de Gastos <b class="caret"></b>
        </a>
        <ul class="dropdown-menu">
          <li><a href="#">Gastos Fijos</a></li>
          <li><a href="#">Gastos Variables</a></li>
        </ul>
      </li>
	  <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
          Detalle de Ingresos <b class="caret"></b>
        </a>
        <ul class="dropdown-menu">
          <li><a href="#">Ingresos</a></li>
        </ul>
      </li>
	  <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
          Ahorro <b class="caret"></b>
        </a>
        <ul class="dropdown-menu">
          <li><a href="#">Saldo</a></li>
        </ul>
      </li>
    </ul>
  
    <form class="navbar-form navbar-left" role="search">
      <div class="form-group">
        <input type="text" class="form-control" placeholder="Buscar">
      </div>
      <button type="submit" class="btn btn-default">Enviar</button>
    </form>
  
    <ul class="nav navbar-nav navbar-right">
      <li><a href="home.blade.php">Registrarse</a></li>
      </li>
    </ul>
  </div>
</nav>
<div class="container">
        @yield('contenido')
    </div>   
</body>
</html>