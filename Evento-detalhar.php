<?php
  require_once realpath(dirname(__FILE__).'/src/models/listaEventosModel.php'); 
?>

<!doctype html>
<html lang="pt-br" class="h-100">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/footer.css">
  <link href="assets/css/carousel.css" rel="stylesheet">

  <link rel="stylesheet" href="assets/css/sparrow-events.css">
  <!--CSS padrão-->

  <title>Sparrow-Events - Detalhes do evento</title>
</head>

<body class="d-flex flex-column h-100">
  <!--#region BARRA DE NAVEGAÇÂO-->
  <nav class="navbar navbar-expand-lg navbar-dark bgroxo">
    <a class="navbar-brand" href="index.html">Sparrow-Events</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Cadastre-se.html">Cadastre-se</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            Eventos
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">Acontecendo</a>
            <a class="dropdown-item" href="#">Previstos</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Encerrados</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Contato.html">Contato</a>
        </li>
      </ul>
      </ul>
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Pesquisar" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Pesquisar</button>
      </form>
    </div>
  </nav>
  <!--#region BARRA DE NAVEGAÇÂO-->

  <!--#region MAIN-->
  <main role="main">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="first-slide" src="assets/img/tomorrawland detalhar 2.1.jpg" alt="First slide">
          <div class="container">
            <div class="carousel-caption text-left">
              <h1>Manchete</h1>
              <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget
                metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <img class="second-slide" src="assets/img/tomorrawland detalhar 2.2.jpg" alt="Second slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Outra manchete</h1>
              <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget
                metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <img class="third-slide" src="assets/img/tomorrawland detalhar 2.jpg" alt="Third slide">
          <div class="container">
            <div class="carousel-caption text-right">
              <h1>Outra manchete, pra garantir</h1>
              <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget
                metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
            </div>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Voltar</span>
      </a>
      <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Avançar</span>
      </a>
    </div>
  </main>
  <!--#endregion MAIN-->

  <!--#region CONTAINER-->
  <div class="container">
    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading"><span class="text-muted"></span></h2>
        <p class="lead"></p>
      </div>
      <div class="container">
            <div class="row">
                <?php
                   $conexao = EventoModel::listarPorId($_GET['id']); 
                   echo  $evento['id'];
                   var_dump($evento);?>
                    <div class="col-sm-12">
            
                    </div>
            </div>           
        </div>
        </div>
    </div>
  </div>
  <!--#endregion CONTAINER-->

  <!--#region CONTAINER TABELA DE PREÇO-->
  <div class="container">
    <div class="card-deck mb-3 text-center">
      <div class="card mb-4 shadow-sm">
        <div class="card-header">
          <h4 class="my-0 font-weight-normal">Pista</h4>
        </div>
        <div class="card-body">
          <h1 class="card-title pricing-card-title">100 Reais <small class="text-muted"></small></h1>
          <ul class="list-unstyled mt-3 mb-4">
            <li>--------</li>
            <li>--------</li>
            <li>--------</li>
            <li>--------</li>
          </ul>
          <button type="button" class="btn btn-lg btn-block btn-outline-primary">Comprar</button>
        </div>
      </div>
      <div class="card mb-4 shadow-sm">
        <div class="card-header">
          <h4 class="my-0 font-weight-normal">Camarote</h4>
        </div>
        <div class="card-body">
          <h1 class="card-title pricing-card-title">350 Reais <small class="text-muted"></small></h1>
          <ul class="list-unstyled mt-3 mb-4">
            <li>--------</li>
            <li>--------</li>
            <li>--------</li>
            <li>--------</li>
          </ul>
          <button type="button" class="btn btn-lg btn-block btn-outline-primary">Comprar</button>
        </div>
      </div>
      <div class="card mb-4 shadow-sm">
        <div class="card-header">
          <h4 class="my-0 font-weight-normal">Open Bar</h4>
        </div>
        <div class="card-body">
          <h1 class="card-title pricing-card-title">500 Reais <small class="text-muted"></small></h1>
          <ul class="list-unstyled mt-3 mb-4">
            <li>--------</li>
            <li>--------</li>
            <li>--------</li>
            <li>--------</li>
          </ul>
          <button type="button" class="btn btn-lg btn-block btn-outline-primary">Comprar</button>
        </div>
      </div>
    </div>
  </div>
    <!--#endregion CONTAINER TABELA DE PREÇO-->

      <!--#region RODA PÉ DO SITE-->
  <footer class="footer mt-auto py-3">
    <div class="container">
      Coloque o conteúdo do sticky footer aqui.
    </div>
  </footer>
  <!--#endregion RODA PÉ DO SITE-->

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="assets/js/jquery-3.3.1.slim.min.js"></script>
  <script src="assets/js/popper.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
</body>

</html>