<?php

	$conexion = new mysqli("mysql6.000webhost.com","a9719547_ings53","epsilon117","a9719547_dbis");
	$conexion->set_charset("utf8");
	$consulta = "select * from Eventos where Activo = 1 ORDER BY idEventos DESC;";
	$result = $conexion->query($consulta);
		if($result->num_rows > 0)
		{
		    for($i=1;$i<=($result->num_rows);$i++){
			$fila = $result->fetch_assoc();
			$id = $fila['idEventos'];
			$autor = $fila['Usuarios_idUsuarios'];
			$fechaI = $fila['FechaInicio'];
			$fechaT = $fila['FechaTermino'];
			$titulo = $fila['Titulo'];
			$desc = $fila['Descripcion'];
			$imagen = $fila['Imagen'];
							
			echo '<hr><div class="row">
   			 <center><img class="eventos" src="'.$imagen.'" ></center>
    		<h2>'.$titulo.'</h2>
			<h5>Publicado por '.$autor.'</h5>
            <p>'.$desc.'</p>
			<h5>Inicia: '.$fechaI.'     Termina:'.$fechaT.'</h5>
    		</div>';
			}
							
		}else{
			echo "No hay eventos ):";
		}

?>