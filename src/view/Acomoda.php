<?php
require '../../config.php';
require '../model/DAO/ClienteDao.php';

$sessao = isset($_SESSION['cliente_logado']) ? $_SESSION['cliente_logado'] : null;

$cliente = new ClienteDao($pdo);
$setarCliente = $cliente->setarID($sessao);

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Acomodações</title>
  <link rel="shortcut icon" href="../../iconelogo.ico" type="image/x-icon">
  <link rel="stylesheet" href="../../assets/CSS/style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
    /* Definir altura fixa para as imagens */
    .carousel-item img {
      height: 300px;
      /* Ajuste conforme necessário */
      object-fit: cover;
      /* Manter proporção da imagem */
    }
  </style>
</head>

<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #096f81;">
  <p></p>
  <a class="navbar-brand" href="#">
    <img src="../../assets/images/banners/logoprincipal-removebg-preview.png" width="300" height="100" class="d-inline-block align-top" alt="Logo">

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
          <a class="nav-link" href="../../index.php">Home</a>
        </li>
        <li class="nav-item button-link">
          <a class="nav-link " href="./Acomoda.php">Acomodações</a>
        </li>
        <li class="nav-item button-link">
          <a class="nav-link" href="./serviços.php">Serviços</a>
        </li>
        <li class="nav-item button-link">
          <a class="nav-link" href="./reservas.php">Reservas</a>
        </li>
        <li class="nav-item button-link">
          <a class="nav-link" href="./contato.php">Contato</a>
        </li>
        <?php if ($sessao && $setarCliente instanceof Cliente) : ?>
            <li class="nav-item dropdown button-link">
              <a class="nav-link dropdown-toggle fonte-cinza d-flex align-items-center px-lg-3" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="bi bi-person-circle fs-4 me-2"></i>
                <?php echo $setarCliente->getNome(); ?>
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="./src/view/perfil.php">Meu Perfil</a></li>
                <li><a class="dropdown-item" href="./src/view/servicos-solicitados.php">Serviços Solicitados</a></li>
                <li>
                  <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="../controller/cliente/deslogar.php">Deslogar</a></li>
              </ul>
            </li>
          <?php else : ?>
            <li class="nav-item button-link">
              <a class="nav-link button-link" href="../controller/cliente/logar.php">Login</a>
            </li>
          <?php endif; ?>
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

<body>

  <div class="container text-center">
    <h1 class="mt-5 mb-4">Acomodações Disponíveis</h1>


    <div class="row">

      <!-- 1 -->
      <div class="col-md-4 mb-4">
        <div id="carouselExampleControls1" class="carousel slide">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="../../assets/images/imagensquartos/duas-camas-individuais_1203-18.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="../../assets/images/imagensquartos/1.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="../../assets/images/imagensquartos/travesseiro-na-cama_74190-4499.jpg" class="d-block w-100" alt="...">
            </div>


          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls1" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls1" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Quarto Padrão</h5>
            <p class="card-text">Descrição do chalé romântico.</p>
            <p class="card-text">Preço por noite: R$ 100,00</p>
            <a href="#" class="btn btn-primary">Reservar Agora</a>
          </div>
        </div>
      </div>

      <!-- 2 -->
      <div class="col-md-4 mb-4">
        <div id="carouselExampleControls2" class="carousel slide">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="../../assets/images/imagensquartos/2.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="../../assets/images/imagensquartos/2a.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="../../assets/images/imagensquartos/2b.jpg" class="d-block w-100" alt="...">
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls2" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls2" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Quarto Standard</h5>
            <p class="card-text">Descrição do outro chalé.</p>
            <p class="card-text">Preço por noite: R$ 200,00</p>
            <a href="#" class="btn btn-primary">Reservar Agora</a>
          </div>
        </div>
      </div>

      <!-- 3 -->
      <div class="col-md-4 mb-4">
        <div id="carouselExampleControls3" class="carousel slide">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="../../assets/images/imagensquartos/3.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="../../assets/images/imagensquartos/3a.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="../../assets/images/imagensquartos/3b.jpg" class="d-block w-100" alt="...">
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls3" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls3" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Suíte Master</h5>
            <p class="card-text">Descrição do mais um chalé.</p>
            <p class="card-text">Preço por noite: R$ 350,00</p>
            <a href="#" class="btn btn-primary">Reservar Agora</a>
          </div>
        </div>
      </div>
      <!-- 4 -->
      <div class="col-md-4 mb-4">
        <div id="carouselExampleControls4" class="carousel slide">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="../../assets/images/imagensquartos/4.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="../../assets/images/imagensquartos/4a.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="../../assets/images/imagensquartos/4b.jpg" class="d-block w-100" alt="...">
            </div>

          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls4" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls4" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Suíte Luxo</h5>
            <p class="card-text">Descrição do chalé romântico.</p>
            <p class="card-text">Preço por noite: R$ 500,00</p>
            <a href="#" class="btn btn-primary">Reservar Agora</a>
          </div>
        </div>
      </div>

      <!-- 5 -->
      <div class="col-md-4 mb-4">
        <div id="carouselExampleControls5" class="carousel slide"">
          <div class=" carousel-inner">
          <div class="carousel-item active">
            <img src="../../assets/images/imagensquartos/5.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item ">
            <img src="../../assets/images/imagensquartos/5a.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item ">
            <img src="../../assets/images/imagensquartos/5b.jpg" class="d-block w-100" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls5" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls5" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Suíte Premium</h5>
          <p class="card-text">Descrição do outro chalé.</p>
          <p class="card-text">Preço por noite: R$ 650,00</p>
          <a href="#" class="btn btn-primary">Reservar Agora</a>
        </div>
      </div>
    </div>

    <!-- 6 -->
    <div class="col-md-4 mb-4">
      <div id="carouselExampleControls6" class="carousel slide">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="../../assets/images/imagensquartos/6.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item ">
            <img src="../../assets/images/imagensquartos/6a.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item ">
            <img src="../../assets/images/imagensquartos/6b.jpg" class="d-block w-100" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls6" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls6" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Suíte Presidencial</h5>
          <p class="card-text">Descrição do mais um chalé.</p>
          <p class="card-text">Preço por noite: R$ 800,00</p>
          <a href="#" class="btn btn-primary">Reservar Agora</a>
        </div>
      </div>
    </div>

  </div>




  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>