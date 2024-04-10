<?php
require './config.php';
require './src/model/DAO/ClienteDao.php';

$sessao = isset($_SESSION['cliente_logado']) ? $_SESSION['cliente_logado'] : null;

$cliente = new ClienteDao($pdo);
$setarCliente = $cliente->setarID($sessao);

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>
  <link rel="shortcut icon" href="iconelogo.ico" type="image/x-icon">
  <link rel="stylesheet" href="./assets/CSS/style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<style>
  .carousel-item img {
 
  height: 940px;
}

</style>
<body>


  <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #096f81;">
    <p></p>
    <a class="navbar-brand" href="#">
      <img src="./assets/images/banners/logoprincipal-removebg-preview.png" width="300" height="100" class="d-inline-block align-top" alt="Logo">

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <!-- espaço para centralizar -->
          <li class="nav-item">
            <a class="nav-link" href="#"></a>
          </li>
          <li class="nav-item button-link">
            <a class="nav-link" href="./index.php">Home</a>
          </li>
          <li class="nav-item button-link">
            <a class="nav-link " href="./src/view/Acomoda.php">Acomodações</a>
          </li>
          <li class="nav-item button-link">
            <a class="nav-link" href="./src/view/serviços.php">Serviços</a>
          </li>

          <li class="nav-item button-link">
            <a class="nav-link" href="./src/view/reservas.php">Reservas</a>
          </li>
          <li class="nav-item button-link">
            <a class="nav-link" href="./src/view/contato.php">Contato</a>
          </li>
          <?php if ($sessao && $setarCliente instanceof Cliente) : ?>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="bi bi-person-circle fs-4 me-2"></i>
                <?php echo $setarCliente->getNome(); ?>
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="./src/view/perfil.php">Meu Perfil</a></li>
                <li><a class="dropdown-item" href="./src/view/servicos-solicitados.php">Serviços Solicitados</a></li>
                <li>
                  <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="./src/controller/cliente/deslogar.php">Deslogar</a></li>
              </ul>
            </li>
          <?php else : ?>
            <li class="nav-item button-link">
              <a class="nav-link dropdown button-link" href="./src/view/login.php">Login</a>
            </li>
          <?php endif; ?>
          <li class="nav-item">
            <a class="nav-link dropdown button-link" href="#"><i class="bi bi-search"></i></a>
          </li>
          
        </ul>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="#">Action</a></li>
          <li><a class="dropdown-item" href="#">Another action</a></li>
          <li>
            <hr class="dropdown-divider">
          </li>
          <li><a class="dropdown-item" href="#">Something else here</a></li>
        </ul>
        </li>
        </ul>

      </div>

  </nav>

  <div id="carouselExampleIndicators" class="carousel slide">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="./assets/images/banners/1.png" class="d-block w-100 img-fluid" alt="...">
      </div>
      <div class="carousel-item">
        <img src="./assets/images/banners/2.png" class="d-block w-100 img-fluid" alt="...">
      </div>
      <div class="carousel-item">
        <img src="./assets/images/banners/3.png" class="d-block w-100 img-fluid" alt="...">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>


  <body class="">
    <h5 class="container text-center my-3 my-xl-5 fs-2">Nossas opções de quartos!</h5>


    <div class="container row mx-auto g-4 text-center">

      <!-- Primeiro card -->
      <div class="col-sm-4 mb-3 mb-sm-0">
        <div class="card rounded-0 border-0">
          <img class="img-fluid" src="./assets/images/imagensquartos/duas-camas-individuais_1203-18.jpg">
          <div class="card-body d-flex align-items-center">
            <div class="word-break-all">
              <h5 class="card-title">Quarto Padrão</h5>
              <p class="card-text">Alugue o quarto simples, mais econômico e custo benefício e aproveite a estadia</p>
              <a href="././src/view/serviços.php#section1" class="btn btn-primary">Reservar Agora</a>
            </div>
          </div>
        </div>
      </div>

      <!-- Segundo Card -->
      <div class="col-sm-4">
        <div class="card rounded-0 border-0">
          <img class="img-fluid" src="./assets/images/imagensquartos/2.jpg">
          <div class="card-body d-flex align-items-center">
            <div class="word-break-all">
              <h5 class="card-title">Suíte Standard</h5>
              <p class="card-text">Alugue o quarto simples, mais econômico e custo benefício e aproveite a estadia</p>
              <a href="././src/view/serviços.php#section2" class="btn btn-primary">Reservar Agora </a>
            </div>
          </div>
        </div>
      </div>

      <!-- Terceiro Card -->
      <div class="col-sm-4">
        <div class="card rounded-0 border-0">
          <img class="img-fluid" src="./assets/images/imagensquartos/3.jpg">
          <div class="card-body d-flex align-items-center">
            <div class="word-break-all">
              <h5 class="card-title">Suíte Master</h5>
              <p class="card-text">Alugue o quarto simples, mais econômico e custo benefício e aproveite a estadia</p>
              <a href="././src/view/serviços.php#section3" class="btn btn-primary">Reservar Agora </a>
            </div>
          </div>
        </div>
      </div>
      <!-- Quarto card -->
      <div class="col-sm-4 mb-3 mb-sm-0">
        <div class="card rounded-0 border-0">
          <img class="img-fluid" src="./assets/images/imagensquartos/4.jpg">
          <div class="card-body d-flex align-items-center">
            <div class="word-break-all">
              <h5 class="card-title">Suíte Luxo</h5>
              <p class="card-text">Alugue o quarto simples, mais econômico e custo benefício e aproveite a estadia</p>
              <a href="././src/view/serviços.php#section4" class="btn btn-primary">Reservar Agora</a>
            </div>
          </div>
        </div>
      </div>

      <!-- Quinto Card -->
      <div class="col-sm-4">
        <div class="card rounded-0 border-0">
          <img class="img-fluid" src="./assets/images/imagensquartos/5.jpg">
          <div class="card-body d-flex align-items-center">
            <div class="word-break-all">
              <h5 class="card-title">Suíte Premium</h5>
              <p class="card-text">Alugue o quarto simples, mais econômico e custo benefício e aproveite a estadia</p>
              <a href="././src/view/serviços.php#section5" class="btn btn-primary">Reservar Agora </a>
            </div>
          </div>
        </div>
      </div>

      <!-- Sexto Card -->
      <div class="col-sm-4">
        <div class="card rounded-0 border-0">
          <img class="img-fluid" src="./assets/images/imagensquartos/6.jpg">
          <div class="card-body d-flex align-items-center">
            <div class="word-break-all">
              <h5 class="card-title">Suíte Presidencial</h5>
              <p class="card-text">Alugue o quarto simples, mais econômico e custo benefício e aproveite a estadia</p>
              <a href="././src/view/serviços.php#section6" class="btn btn-primary">Reservar Agora </a>
            </div>
          </div>
        </div>
      </div>


    </div>



    <br><br>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>

  <body>
    <footer class="text-white py-0" style="background-color: #096f81;">
      <div class="container">
        <div class="row align-items-center text-center">
          <div class="col-6">
            <p class="mb-0">&copy; 2024 Pousada Rio de Ondas. Todos os direitos reservados.</p>
          </div>
          <div class="col-6 text-end">
            <img src="./assets/images/banners/logosecundaria-removebg-preview.png" alt="Logo da Empresa" class="img-fluid" style="max-width: 200px;">
          </div>
        </div>
      </div>
    </footer>

</html>