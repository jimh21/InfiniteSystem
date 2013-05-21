<?php

	$conexion = new mysqli("mysql6.000webhost.com","a9719547_ings53","epsilon117","a9719547_dbis");
	$conexion->set_charset("utf8");
	$consulta = "select * from Noticias where Activo = 1 ORDER BY idNoticias DESC;";
	$result = $conexion->query($consulta);
		if($result->num_rows > 0)
		{
		    for($i=1;$i<=3;$i++){
			$fila = $result->fetch_assoc();
			$id = $fila['idNoticias'];
			$autor = $fila['Usuarios_idUsuarios'];
			$titulo = $fila['Titulo'];
			$desc = $fila['Contenido'];
			$imagen = $fila['Imagen'];
			$fecha = $fila['Fecha'];
							$tagpos = strpos($desc,'<middle>');
							if ($tagpos < 1) {
								// copiar los primeros 110 caracteres
								$tagpos = 111;
							}
							$contenido = strip_tags(substr(stripslashes($desc),0,$tagpos - 1));
							
			echo '<hr><div class="row">
			<div class="media">
    		<a class="pull-left" href="#">
   			 <img class="box" src="'.$imagen.'" >
    		</a>
   			 <div class="media-body">
    		<h3 class="media-heading">'.$titulo.'</h3>
			<h5>Publicado por '.$autor.'  '.$fecha.'</h5>
            <p>'.$contenido.'</p>
    		</div>
   		 </div></div>';
			}
							
		}else{
			echo "No hay noticias ):";
		}

?>