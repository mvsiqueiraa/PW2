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
    <h1 class="page-title">Cadastrar novo usuario</h1>

    <div class="espo-form">
      <form action="new_user_insert.php" method="POST">

        <div class="field">
          <div class="field-label">
            Login
          </div>
          <div class="field-data">
            <input type="text" id="login" name="login" placeholder="Digite o login" size="40">
          </div>
        </div>

        <div class="field">
          <div class="field-label">
            Senha
          </div>
          <div class="field-data">
            <input type="text" id="senha" name="senha" placeholder="Digite a senha" size="30">
          </div>
        </div>      

        <div class="field">
          <div class="field-label">
            Repetir a senha
          </div>
          <div class="field-data">
            <input type="text" id="repetirsenha" name="repetirsenha" placeholder="Digite a senha novamente" size="30">
          </div>
        </div>      
        
          <div class="button-container">
            <input type="submit" class="submit-button" id="botao_submit" name="botao-submit"
            value="Cadastrar">
        </div>
      </form>
    </div>
  </content>

  <footer class="border">
  </footer>

</body>
</html>

<script src="js/all.min.js"></script>
<script src="js/jquery.js"></script>
<script src="js/espo_scripts.js" ></script>