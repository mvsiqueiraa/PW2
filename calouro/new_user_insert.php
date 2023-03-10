<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CALOURO NOTICIAS</title>
  
  <!-- Importação da fonte Lato do Google -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Lato&display=swap"
      rel="stylesheet"
    />

  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/header.css">
  <link rel="stylesheet" href="css/slider.css">
  <link rel="stylesheet" href="css/service_classes.css">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css">
  <script "text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script "text/javascript" src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>
</head>
<body>
  <?php include_once 'header.php'; ?>
  
  <content>
    <h1 class="page-title">Cadastrar novo espaço</h1>

    <?php
    $login = $_POST['login'];
    $senha = $_POST['senha'];
    $repetirsenha = $_POST['repetirsenha'];

    $hash = hash('sha256', $senha);
    ?>


    <div class="space-insert">

<?php
include_once 'connect.php';

$sql_verificar = "SELECT * FROM usuarios WHERE login = '$login'";

$sql = "INSERT INTO usuarios (login, senha) VALUES ('$login', '$hash')";

if (mysqli_num_rows(mysqli_query($connection, $sql_verificar))> 0) {
  echo "Usuário já cadastrado!
  <a href='index.php'>Voltar</a>
  ";
} else {
  if ( ($senha != "") && ($senha == $repetirsenha) ) {
    if ($result = mysqli_query($connection, $sql)) {
        echo "Usuário cadastrado com sucesso.
        <a href='index.php'>Voltar</a>
      ";
    } else {
        echo "Erro ao cadastrar usuário.
        <a href='index.php'>Voltar</a>
        ";
      }
    } else {
      echo "A senha está em branco ou não confere com a sua correspondente
      <a href='index.php'>Voltar</a>";
  }
}

?>

</div>


  </content>

  <footer class="">
  </footer>

</body>
</html>

<script src="js/all.min.js"></script>
<script src="js/jquery.js"></script>
<script src="js/espo_scripts.js" ></script>