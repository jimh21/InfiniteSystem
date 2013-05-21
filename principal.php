<?php
	require_once("sesion.class.php");
	
	$sesion = new sesion();
	$usuario = $sesion->get("usuario");
	
	if( $usuario == false )
	{	
		header("Location: login.php");		
	}
	else 
	{
	    function obtenerInfo($usuario)
	{
		$conexion = new mysqli("mysql6.000webhost.com","a9719547_ings53","epsilon117","a9719547_dbis");
		$consulta = "select * from Personajes where Usuarios_idUsuarios = '".$usuario."';";
		$result = $conexion->query($consulta);

		if($result->num_rows > 0)
		{
		    for($i=1;$i<=($result->num_rows);$i++){
			$fila = $result->fetch_assoc();
			$id = $fila['idPersonaje'];
			$clase = $fila['Clase'];
			$nivel = $fila['Nivel'];
			$hp = $fila['HP'];
			$ap = $fila['AP'];
			$fuerza = $fila['Fuerza'];
			$destreza = $fila['Destreza'];
			$aguante = $fila['Aguante'];
			$resistencia = $fila['Resistencia'];
			$vitalidad = $fila['Vitalidad'];
			$Aprendizaje = $fila['Aprendizaje'];
			echo '<hr><p><table class="table table-striped">  
					<thead>  
					<tr>  
						<th>  ID PERSONAJE  </th>
						<td>'.$id.'</td>
						<th>  Destreza  </th>
						<td>'.$destreza.'</td>
					</tr>  
					</thead>  
					<tbody>  
					<tr>  
						<th>  Clase  </th>  
						<td>'.$clase.'</td>
						<th>  Aguante  </th>
						<td>'.$aguante.'</td>
					</tr>  
					<tr>  
						<th>  Nivel  </th>  
						<td>'.$nivel.'</td>  
						<th>  Resistencia  </th>  
						<td>'.$resistencia.'</td>  
					</tr>  
					<tr>  
						<th>  HP  </th>  
						<td>'.$hp.'</td>  
						<th>  Vitalidad  </th>  
						<td>'.$vitalidad.'</td>  
					</tr>
					<tr>  
						<th>  AP  </th>  
						<td>'.$ap.'</td>  
						<th>  Aprendizaje  </th>  
						<td>'.$Aprendizaje.'</td>  
					</tr> 					
					<tr>  
						<th>  Fuerza  </th>  
						<td>'.$fuerza.'</td>  
						<td></td>  
						<td></td>  
					</tr> 
        </tbody>  
      </table></p></hr>';
}
		}
		else
				echo "<p>Aun no tienes personajes D8!!!</p>";
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
<?php require_once("menu.php"); ?>
<div class="container">
  <div class="row">
    <div class="offset4 span4">
	<h1>Hola  <?php echo $sesion->get("usuario"); ?> !!!</h1> 
	<a href="cerrarsesion.php"> Cerrar Sesion </a>
	<p> <?php obtenerInfo($sesion->get("usuario")); ?> </p>
	
	  </div>
  </div>
  </div>
	</body>
	<?php require_once("footer.php"); ?>
	</HTML>
	
	<?php 
	}	
?>