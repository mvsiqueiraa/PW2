<header>
  <div class="logo">
    <a href="index.php">
      <img src="images/logo-espo.png">
    </a>
  </div>

  <div class="entrar">
  
    <?php
session_start();

if ( (isset($_SESSION['login'])) && (isset($_SESSION['senha'])) ) {
  $logado = $_SESSION['login'];
  echo $logado;
  echo "
    <a href='logout.php'>sair</a>
  ";
} else {
  echo "
    <a href='login.php'>Entrar</a>
    ";
  }


?>
  </div>
  <button class="btn-menu">
    <i class="fas fa-bars fa-lg"></i>
  </button>
  <div class="menu">
    <a href="" class="btn-close">
      <i class="fas fa-times fa-lg"></i>
    </a>
        <!-- botão para fechar o menu -->
    <ul>
      <li><a href="index.php" class="btn-menu-item">Home</a></li>
      <li><a href="login.php" class="btn-new-space">Entrar</a></li>
      <li><a href="#" class="btn-new-space">Nova Noticia</a></li>
      <li><a href="#" class="btn-menu-item">Regiões</a></li>
      <li><a href="#" class="btn-menu-item">Quem somos</a></li>
    </ul>
  </div>
</header>