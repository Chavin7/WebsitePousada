<!DOCTYPE html>
<html>

<head>
  <title>Login</title>
  <link rel="shortcut icon" href="../../iconelogo.ico" type="image/x-icon">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display&family=Inter:wght@100..900&display=swap" rel="stylesheet">
</head>
<style>
  
.btnentrar{
color: white;
background-color: #096f81;
    }

</style>

<body>
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

<div class="d-none d-sm-flex flex-column justify-content-center align-items-center font-jost " style="height: 100vh;">
    <form class="col-md-10 container row d-flex flex-column align-items-center ;" action="../controller/cliente/logar.php" method="post">

        <h5 class="mb-5">Faça o Login!</h5>

        <div class="form-group mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control"name="email" " required>
        </div>
        <div class="form-group mb-3">
            <label for="senha" class="form-label">Senha</label>
            <input type="password" name="senha" class="form-control" aria-describedby="passwordHelpBlock" required>
        </div>
        <div class="col-auto ">
            <button type="submit" class="btnentrar">Entrar</button>
        </div>

        <p class="mt-5">Não tem uma conta? <a href="./criar-conta.php">Crie uma!</a></p>
    </form>
</div>

</body>

</html>