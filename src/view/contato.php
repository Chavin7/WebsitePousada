<?php
require '../../config.php';
require '../model/DAO/ClienteDao.php';

$sessao = isset($_SESSION['cliente_logado']) ? $_SESSION['cliente_logado'] : null;

$cliente = new ClienteDao($pdo);
$setarCliente = $cliente->setarID($sessao);

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contato</title>
  <link rel="shortcut icon" href="../../iconelogo.ico" type="image/x-icon">
  <link rel="stylesheet" href="../../assets/CSS/style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<style>
  
.social-icons img {
    width: 50px; 
  }
  

.social-icons a:hover{
  display: inline-block;
  transition: transform 0.2s;
  transform: scale(1.2);
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

  <br><br>

  <h3 class="container text-center">Onde Ficamos:</h3>
  <div class="map-container text-center">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d498994.6790034493!2d-45.5854506!3d-12.2891019!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x934a3941183292f7%3A0x28a747f94f179df3!2sRio%20de%20Ondas!5e0!3m2!1spt-BR!2sbr!4v1708306555188!5m2!1spt-BR!2sbr" width="850" height="500" style="border: 2px;;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
  </div>

  <br><br>

  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card">
          <div class="card-body">
            <h3 class="card-title text-center mb-4">Entre em Contato</h3>
            <div class="mb-3">
              <h5>Informações de Contato da Pousada:</h5>
              <p>Telefone: (77) 99833-1744</p>
              <p>Email: pousadariodeondas@gmail.com</p>
              <p>Endereço: Rio de Ondas , 773, Barreiras / BA</p>
            </div>
            <hr>
            <h5>Formulário de Contato:</h5>
            <form>
              <div class="mb-3">
                <label for="name" class="form-label">Nome</label>
                <input type="text" class="form-control" id="name" required>
              </div>
              <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" required>
              </div>
              <div class="mb-3">
                <label for="message" class="form-label">Mensagem</label>
                <textarea class="form-control" id="message" rows="3" required></textarea>
              </div>
              <div class="d-grid">
                <button type="submit" class="btn btn-primary">Enviar Mensagem</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <br><br>

  <h3 class="container text-center">Nossas Redes:</h3>
  <div id="social" class="social-icons text-center">
    <a href="https://www.instagram.com/LuizChavesz/" target="_blank"><img src="../../assets/images/imagensredes/download.jpeg" alt="Instagram"></a>
    <a href="https://api.whatsapp.com/send?phone=5577998331744&text=" target="_blank"><img src="../../assets/images/imagensredes/a.png" alt="WhatsApp"></a>
    <a href="https://www.facebook.com/Riodeondas/" target="_blank"><img src="../../assets/images/imagensredes/logo face.jpeg" alt="Facebook"></a>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <br><br>
</body>
<footer class="container text-center">
  © Pousada Rio de Ondas, Todos os direitos reservados.
</footer>

</html>