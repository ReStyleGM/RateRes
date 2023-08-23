<?php require_once("conexao/conexao.php"); ?>

<?php
if (isset($_POST["usuario"])) {


    session_start();


    $_usuario = $_POST["usuario"];
    $_senha = $_POST["senha"];

    $login = "SELECT * FROM login WHERE usuario = '{$_usuario}' and senha = '{$_senha}' ";
    $acesso = mysqli_query($conecta, $login);

    if (!$acesso) {
        die("Falha na consulta ao banco");
    }

    $informacao = mysqli_fetch_assoc($acesso);

    if (empty($informacao)) {
        $mensagem = "Login sem Sucesso";
    } else {
        $_SESSION["usuario_Logado"] = $informacao["cod_usuario"]; 
        header("location:home.html");
    }
}
?>

<html>
    <head>
	<title>Tela de Login</title>
	    <link rel="stylesheet" type="text/css" href="css/stylelogin.css">
	    <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
	    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
	    <img class="wave" src="img/wave.png">
	        <div class="container">
		    <div class="img">
		<img src="img/inicio.png">
	</div>

		    <div class="login-content">
		<form action="login.php" method="post">
		<img src="img/icon.png">
	<h2 class="title">Boas Vindas</h2>
           	<div class="input-div one">
           	<div class="i">
        <i class="fas fa-user"></i>
    </div>
           	<div class="div">
    <h5>Usuario</h5>
        <input type="text" name="usuario" class="input">
    </div>
</div>

           	<div class="input-div pass">
           	<div class="i"> 
        <i class="fas fa-lock"></i>
    </div>
           	<div class="div">
           	<h5>Senha</h5>
        <input type="password" name="senha" class="input">
    </div>
</div>

            <a href="#">Esqueci a senha</a>
        <input type="submit" class="btn" value="Login">

        <?php
            if (isset($mensagem)) {
            ?>  
                <p> <?php echo $mensagem ?> </p>
            <?php
            }
            ?>
        </form>
    </div>
</div>
        <script type="text/javascript" src="js/loginjava.js"></script>
         <div vw class="enabled">
    <div vw-access-button class="active"></div>
    <div vw-plugin-wrapper>
      <div class="vw-plugin-top-wrapper"></div>
    </div>
  </div>
  <script src="https://vlibras.gov.br/app/vlibras-plugin.js"></script>
  <script>
    new window.VLibras.Widget('https://vlibras.gov.br/app');
  </script>
    </body>
</html>