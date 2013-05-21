<?php

class web {
	// propiedades
	var $articulo;
	var $pagina;
	var $enlaces;
	var $db; // enlace a la DB
	var $datos; // indica si los datos estan disponibles
	var $contenido; // información para la página
	var $principal; // indica si es la página principal
	
	// metodos
	function web() 
	{

	}
	
	function close()
	{
		// terminar los objetos utilizados
		$this->db->close();
	}
	
	function titulo($navegador)
	{
		if ($navegador) {
			echo $this->enlaces[$this->pagina]['etiqueta'];
		} else {
			echo $this->contenido['titulo'];
		}
	}
	
	function navegacion()
	{
		// escribir los enlaces
		foreach ($this->enlaces as $enlace) {
			if ($enlace['activo']) {
				echo '<li class="active"><a href="#">' . $enlace['etiqueta'] . '</a></li>';	
			} else {
				echo '<li><a href="' . $enlace['enlace'] . '">' . $enlace['etiqueta'] . '</a></li>';	
			}
		}
	}
	
	function featured()
	{
		// colocar el extracto resaltado únicamente en la página principal
		if ($this->principal) {
			echo '<aside id="featured" class="body">
				 <article>';
		
			if ($this->contenido['imagen'] != '-') {
				echo '<figure>
						<img src="' . $this->contenido['imagen'] . '" alt="" />
					</figure>';
			}
			
			echo '<hgroup>
					<h2>Featured Article</h2>
					<h3><a href="#">' .  strip_tags($this->contenido['titulo']) . '</a></h3>
				</hgroup>' . $this->contenido['contenido'] . '
				<!-- edit links -->
				<footer>
					<h3>Options</h3>					
					<ul>
						<li><a href="edit.php?id=' . $this->articulo . '" rel="external">Edit this article</a></li>
						<li><a href="edit.php?id=' . $this->articulo . '&p=-1" rel="external">Add new page in this article</a></li>
					</ul>
				</footer>
				</article></aside><!-- /#featured -->';
		}
	}
								  
	function contenido()
	{
		// colocar el contenido de la página
		if ($this->principal && ! empty($this->contenido['paginas'])) {
			// colocar los extractos de las páginas
			echo '<section id="content" class="body">
				  <ol id="posts-list" class="hfeed">';
	
			foreach ($this->contenido['paginas'] as $pagina) {
				echo '<li><article class="hentry">	
						<header>
						<h2 class="entry-title"><a href="index.php?id=' . $pagina['articulo'] . '&p=' . $pagina['pagina'] . '" rel="bookmark" 
						title="Permalink to this page">' . $pagina['titulo'] . '</a></h2>
						</header>
						<footer class="post-info">
						<abbr class="published" title="' . $pagina['fecha'] . '"><!-- YYYYMMDDThh:mm:ss+ZZZZ -->
							' . date('jS \of F Y', strtotime($pagina['fecha'])) . '
						</abbr>
						<address class="vcard author">
							By <a class="url fn" href="#">' . $pagina['autor'] . '</a>
						</address>
						</footer><!-- /.post-info -->
						<div class="entry-content">
							<p>' . $pagina['contenido'] . '</p>
						</div><!-- /.entry-content -->
						</article></li>';
			}
			
			echo '</ol><!-- /#posts-list -->
				 </section><!-- /#content -->';
		}
		
		if (! $this->principal) {
			echo '<section id="content" class="body">
					<article>';
			
			if ($this->contenido['imagen'] != '-') {
				echo '<figure>
						<img src="' . $this->contenido['imagen'] . '" alt="" />
					</figure>';
			}
			
			echo '<hgroup>
					<h2>' . $this->contenido['articulo'] . '</h2>
					<h3 class="published" title="' . $this->contenido['fecha'] . '"><!-- YYYYMMDDThh:mm:ss+ZZZZ -->
							' . date('jS \of F Y', strtotime($this->contenido['fecha'])) . '
					<address class="vcard author">
						By <a class="url fn" href="#">' . $this->contenido['autor'] . '</a>
					</address>
					</h3>
				</hgroup>
				' . $this->contenido['contenido'] . '
				<!-- edit links -->
				<footer>
					<h3>Options</h3>					
					<ul>
						<li><a href="edit.php?id=' . $this->articulo . '&p=' . $this->pagina . '" rel="external">Edit this page</a></li>
						<li><a href="edit.php?id=' . $this->articulo . '&p=-1" rel="external">Add new page in this article</a></li>
					</ul>
				</footer>
				</article></section><!-- /#content -->';
		}
	}
	
	function articulos()
	{
		// colocar los enlaces a otros artículos
		echo '<section id="other" class="body">
			 <h2>Other articles</h2>
			 <ul>';
			 
		foreach ($this->contenido['articulos'] as $articulo) {
			echo '
				<li><a href="index.php?id=' . $articulo['id'] . '	" rel="external">' . $articulo['titulo'] . '</a></li>';
		}
		
		// agregar un enlace para agregar artículos nuevos
		echo '
			 <li><a href="edit.php?id=-1" rel="external">Add a new article ...</a></li>';
			
		echo '</ul>
			 </section><!-- /#other articles -->';
	}  
}

// crear una instancia de la clase
$web = new web();

?>