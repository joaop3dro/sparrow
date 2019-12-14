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

    <link rel="stylesheet" href="assets/css/sparrow-events.css">
    <!--CSS padrão-->

    <title>Sparrow Events - Home</title>
</head>

<body class="d-flex flex-column h-100">
    <!--#region BARRA DE NAVEGAÇÃO-->
    <nav class="navbar navbar-expand-lg navbar-dark bgroxo">
        <a class="navbar-brand" href="#">Sparrow-Events</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Cadastre-se.html">Cadastre-se</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
                    <a class="nav-link" href="contato1.html">Contato</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Pesquisar" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Pesquisar</button>
            </form>
        </div>
    </nav>
    <!--#endregion-->

    <!-- #region JUMBOTRON-->
    <div class="jumbotron jumbotron1">
        <div class="container">
            <h1 class="display-3">Sparrow-Events</h1>
            <p>Este é um template para um simples marketing ou website informacional. Ele inclui um callout grande
                (denominado
                jumbotron) e três conteúdos adicionais. Use-o como um ponto de partida para algo mais peculiar.</p>
            <p><a class="btn btn-primary btn-lg" href="#" role="button">Saiba mais &raquo;</a></p>
        </div>
    </div>

    <main role="main" class="flex-shrink-0 mb-5">
        <div class="container">
            <div class="row">
                <?php
                   $ListarEventos = EventoModel::ListarTodosEventos(); 
                   foreach ($ListarEventos as $evento): ?>
                  
                    <div class="col-sm-4" >
                        <a href="Evento-detalhar.html">
                            <div class="card">
                                <img class="card-img-top" src="assets/img/festa 01.jpg" alt="Imagem de capa do card">
                            </div>
                        </a>
                        <div class="card-body">
                            <h5 class="card-title"></h5>
                            <p class="card-text">
                                <?php 
                             echo "<b>". $evento['titulo']."</b>"."<p>". $evento['descricao'];"</p>" 
                              ?>
                            </p>
                            <a href="Evento-detalhar.php?id=<?php echo $evento['id_evento']; ?>" class="btn btn-primary">Visitar</a>
                        </div>
                    </div>
                <?php endforeach ?>
            </div>
            
        </div>
        </div>
    </main>


    <footer class="footer mt-auto py-3">
        <div class="container">
            <span>Coloque o conteúdo do sticky footer aqui.</span>
        </div>
    </footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="assets/js/jquery-3.3.1.slim.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
</body>

</html>