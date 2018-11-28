<html>
    <head>
        <title>.:Projeto Agenda:.</title>
        <link rel="stylesheet" type="text/css" href="css/app.css">

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
            <a class="dropdown-item" href="#">Novo contato</a>
            <a class="dropdown-item" href="{{ url ('screens/listar') }}">Listar contatos</a>
          </div>
        </ul>
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Pesquisar contato" aria-label="Search">
        <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Buscar</button>
      </form>
    </div>
    </nav>
  </header>


  <!-- Banner -->
  <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100" src="images/executivos.jpg" alt="First slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="images/amigos51.jpg" alt="Second slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="images/amigoscafe.jpg" alt="Third slide">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

  <!-- Cards -->
<div class="container">

  <div class="row">

      <div class="col-md">
        <div class="card" style="width: 20rem; margin-top: 5px;">
          <img class="card-img-top" src="images/contatos2.jpg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Adicionar novo contato</h5>
            <p class="card-text">Aqui você adiciona seus contatos</p>
            <a href="#" class="btn btn-outline-primary" style="float: right;">Vamos lá</a>
          </div>
        </div>
      </div>
      
      <div class="col-md">
        <div class="card" style="width: 20rem; margin-top: 5px;">
          <img class="card-img-top" src="images/contatos3.jpg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title" style="color:blue;">Lista dos Contatos</h5>
            <p class="card-text">Aqui você pode ver seus contatos</p>
            <a href="{{url ('screens/listar')}}" class="btn btn-outline-primary" style="float: right;">Listar</a>
          </div>
        </div>
      </div>

      <div class="col-md">
        <div class="card" style="width: 20rem; margin-top: 5px;">
          <img class="card-img-top" src="images/contatos.jpg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title" style="color:blue;">Card a mais só para enfeitar</h5>
            <p class="card-text">Lorem ipsum dolor sit amet, his quod lucilius eu, viris aliquando cu eam, mei ad epicuri appareat. An solum sapientem imperdiet vel, malis commodo hendrerit has no. Sit ei purto decore tamquam. Cu scripta mandamus usu</p>
            </div>           
        </div>
      </div>

      <div class="col-md">
          <div class="card" style="width: 20rem; margin-top: 5px;">
            <div class="card-body">
              <h5 class="card-title" style="color:blue;">Card a mais só para enfeitar</h5>
              <p class="card-text">Lorem ipsum dolor sit amet, his quod lucilius eu, viris aliquando cu eam, mei ad epicuri appareat. An solum sapientem imperdiet vel, malis commodo hendrerit has no. Sit ei purto decore tamquam. Cu scripta mandamus usu</p>
            </div>
            <img class="card-img-top" src="images/contatos.jpg" alt="Card image cap">
          </div>
      </div>

      <div class="col-md">
          <div class="card" style="width: 20rem; margin-top: 5px;">
            <div class="card-body">
              <h5 class="card-title" style="color:blue;">Card a mais só para enfeitar</h5>
              <p class="card-text">Lorem ipsum dolor sit amet, his quod lucilius eu, viris aliquando cu eam, mei ad epicuri appareat. An solum sapientem imperdiet vel, malis commodo hendrerit has no. Sit ei purto decore tamquam. Cu scripta mandamus usu</p>
            </div>
            <img class="card-img-top" src="images/contatos.jpg" alt="Card image cap">
            </div>
      </div>

      <div class="col-md">
          <div class="card" style="width: 20rem; margin-top: 5px;">
            <div class="card-body">
              <h5 class="card-title" style="color:blue;">Card a mais só para enfeitar</h5>
              <p class="card-text">Lorem ipsum dolor sit amet, his quod lucilius eu, viris aliquando cu eam, mei ad epicuri appareat. An solum sapientem imperdiet vel, malis commodo hendrerit has no. Sit ei purto decore tamquam. Cu scripta mandamus usu</p>
            </div>
            <img class="card-img-top" src="images/contatos.jpg" alt="Card image cap">
            </div>
      </div>
  
</div>


  <!-- Rodapé -->
  <ul class="nav justify-content-center bg-dark">
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

    <script type="text/javascript" src="js/app.js">></script>
</body>
</html>