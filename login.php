<?php
	require_once("sesion.class.php");

	$sesion = new sesion();
	
	if( isset($_POST["iniciar"]) )
	{
		
		$usuario = $_POST["usuario"];
		$password = $_POST["contrasenia"];
		
		if(validarUsuario($usuario,$password) == true)
		{			
			$sesion->set("usuario",$usuario);
			
			header("location: principal.php");
		}
		else 
		{
			echo "Verifica tu nombre de usuario y contrase�a";
		}
	}
	
	function validarUsuario($usuario, $password)
	{
		$conexion = new mysqli("mysql6.000webhost.com","a9719547_ings53","epsilon117","a9719547_dbis");
		$consulta = "select password from Usuarios where idUsuarios = '".$usuario."';";
		$result = $conexion->query($consulta);

		if($result->num_rows > 0)
		{
			$fila = $result->fetch_assoc();
			if( strcmp($password,$fila["password"]) == 0 )
				return true;						
			else					
				return false;
		}
		else
				return false;
	}

?>
<!doctype html>
<html lang="en-US">
<head>
  <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
  <title>Infinite System</title> 
<?php require_once("head.php"); ?> 
  
</head>

<body>
<?php include_once("analyticstracking.php") ?>
<?php require_once("menu.php"); ?> 
<hr>
<div class="container">
  <div class="row">
    <div class="offset4 span4">
<form name="frmLogin" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
  <div>
   <div> <label><h2>Usuario: </h2></label> <input type="text" name = "usuario"/></div>
    <div><label><h2>Contraseña:</h2> </label> <input type="password" name = "contrasenia" /></div>
    <div><input class="btn btn-primary" type="submit" name ="iniciar" value="Iniciar Sesion"/></div>
  </div>
  </div>
  </div>
  </div>
</form>
</div>

<?php require_once("footer.php"); ?>  
</body>
</html>