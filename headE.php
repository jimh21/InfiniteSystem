<?php

	$conexion = new mysqli("mysql6.000webhost.com","a9719547_ings53","epsilon117","a9719547_dbis");
	$conexion->set_charset("utf8");
	$consulta = "select * from Eventos where Activo = 1 ORDER BY idEventos DESC;";
	$result = $conexion->query($consulta);
		if($result->num_rows > 0)
		{
		    for($i=1;$i<=3;$i++){
			$fila = $result->fetch_assoc();
			$id = $fila['idEventos'];
			$autor = $fila['Usuarios_idUsuarios'];
			$fechaI = $fila['FechaInicio'];
			$fechaT = $fila['FechaTermino'];
			$titulo = $fila['Titulo'];
			$desc = $fila['Descripcion'];
			$imagen = $fila['Imagen'];
							$tagpos = strpos($desc,'<middle>');
							if ($tagpos < 1) {
								// copiar los primeros 110 caracteres
								$tagpos = 111;
							}
							$contenido = strip_tags(substr(stripslashes($desc),0,$tagpos - 1));
							
			echo '<div class="span4">
             <h2>'.$titulo.'</h2>
			 <h5>Publicado por '.$autor.'</h5>
             <p>'.$contenido.'</p>
             
			</div>';
			}
							
		}else{
			echo "No hay eventos ):";
		}

?>