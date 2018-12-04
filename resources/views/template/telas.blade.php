<html>
    <head>
        <title>.:Projeto Agenda:.</title>
        <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
        <meta name="csrf-token" content="{{ csrf_token() }}">
    </head>
<body>

  <!-- Menu de navegação -->
  <header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="{{ url ('/')}}">Agenda</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="{{ url ('/')}}">Home</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Menu
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="{{ url('screens/novo')}}">Novo contato</a>
            <a class="dropdown-item" href="{{ url ('screens/listar') }}">Listar contatos</a>
          </div>
        </ul>
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Pesquisar contato" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
      </form>
    </div>
    </nav>
  </header>

<div class="container">
@yield('content')
</div>


  <!-- Rodapé -->
  <ul class="nav justify-content-center">
    <li class="nav-item">
      <a class="nav-link" href="#">Home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Novo contato</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Listar contatos</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="https://github.com/fabiogda">Github</a>
    </li>
  </ul>

    <script type="text/javascript" src="{{asset('js/app.js')}}">></script>
</body>
</html>