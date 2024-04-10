<?php
require '../../config.php';
require '../model/DAO/ClienteDao.php';

$sessao = isset($_SESSION['cliente_logado']) ? $_SESSION['cliente_logado'] : null;

$cliente = new ClienteDao($pdo);
$setarCliente = $cliente->setarID($sessao);

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar conta</title>
    <link rel="shortcut icon" href="../../iconelogo.ico" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="../../assets/css/style.css">
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
          <a class="nav-link" href="./Galeria.php">Galeria</a>
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
    <div class="d-none d-sm-flex flex-column justify-content-center align-items-center font-jost bg-body-secondary" style="height: 100vh;">
        <form class="col-md-10 container row d-flex flex-column align-items-center justify-content-center border border-secondary p-5 bg-light" style="border-radius: 10px;" action="../controller/cliente/cadastrar.php" method="post">
            <h5 class="mb-5">Cadastrar</h5>
            <div class="form-group mb-3">
                <label for="nome" class="form-label">Nome</label>
                <input type="text" class="form-control" name="nome" placeholder="Seu nome aqui">
            </div>
            <div class="form-group mb-3">
                <label for="genero" class="form-label">Gênero</label>
                <div class="form-floating">
                    <select class="form-select" name="genero">
                        <option value="Masculino">Masculino</option>
                        <option value="Feminino">Feminino</option>
                    </select>
                    <label for="floatingSelect">Qual o seu gênero?</label>
                </div>
            </div>
            <div class="form-group mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" placeholder="seu@email.com" name="email">
            </div>
            <div class="form-group mb-3">
                <label for="inputPassword5" class="form-label">Senha</label>
                <input type="password" class="form-control" placeholder="Sua senha aqui" name="senha">
            </div>
            <div class="col-auto align-self-start">
                <button type="submit" id="cad" class="btn text-center">Cadastrar</button>
            </div>

            <p class="mt-5">Já tem uma conta? <a href="./login.php">Faça Login!</a></p>
        </form>
    </div>

    <div class="d-flex d-sm-none flex-column justify-content-center align-items-center font-jost bg-light" style="height: 100vh;">
        <form class="container row d-flex flex-column align-items-center justify-content-center p-5" style="border-radius: 10px;" action="./controller/cliente/cadastrar.php">
            <h5 class="mb-5 text-center">Cadastrar</h5>
            <div class="form-group mb-3">
                <label for="nome" class="form-label">Nome</label>
                <input type="text" class="form-control" name="nome" placeholder="Seu nome aqui">
            </div>
            <div class="form-group mb-3">
                <label for="genero" class="form-label">Gênero</label>
                <div class="form-floating">
                    <select class="form-select" name="genero">
                        <option value="Masculino">Masculino</option>
                        <option value="Feminino">Feminino</option>
                        <option value="Outro">Outro</option>
                        <option value="Prefiro não dizer">Prefiro não dizer</option>
                    </select>
                    <label for="floatingSelect">Qual o seu gênero?</label>
                </div>
            </div>
            <div class="form-group mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" placeholder="seu@email.com" name="email">
            </div>
            <div class="form-group mb-3">
                <label for="senha" class="form-label">Senha</label>
                <input type="password" class="form-control" placeholder="Sua senha aqui" name="senha">
            </div>
            <div class="col-12 text-center">
                <button type="submit" id="cad" class="col-6">Cadastrar</button>
            </div>

            <p class="mt-5 text-center">Já tem uma conta? <a href="./login.php">Faça Login!</a></p>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>