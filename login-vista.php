        
<?php
	include("db.php");

	if (isset($_POST['entrar'])) {
		$email = $_POST['email'];
		$pass = $_POST['pass'];
		$verifica = mysql_query("SELECT * FROM users WHERE email = '$email' AND password='$pass'");
		if (mysql_num_rows($verifica)<=0) {
			echo "<h3>Verifica que el Correo o Contraseña esten correctos!</h3>";
		}else{
			setcookie("login",$email);
			header("location: ./");
		}
	}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Inicia Sesión</title>
    <link rel="stylesheet" href="css/EstilosLogin.css">
      <style type="text/css">
      h3{text-align: center; color: #1E90FF; margin-top: 15px;}
        </style>
  </head>
  <body>

    <div class="login-box">
      <img src="image/LogotipoDelta.png" class="avatar" alt="Avatar Image">
      <h1>Inicia Sesión</h1>
      <form method="POST">
        <!-- Usuario-->
        <label for="email">Correo</label>
        <input type="text" placeholder="Correo" name="email">
        <!-- Pass -->
        <label for="password">Contraseña</label>
        <input type="password" placeholder="Contraseña" name="pass">
          
        <input type="submit" value="Iniciar Sesión" name="entrar">
          <p align="center"><a href="register-vista.php">¿No tienes una cuenta?</a></p>

      </form>

    </div>
  </body>
</html>
