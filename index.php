<!DOCTYPE HTML>
<html lang="en-US">
<head>
  <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
  <title>Infinite System</title> 
<?php require_once("head.php"); ?> 
  
</head>

<body>
<?php include_once("analyticstracking.php") ?>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/es_LA/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<?php require_once("menu.php"); ?> 

    
    <div id="main-content">
<hr>
      <div class="container">
      <div class="row">
          <div class="media">
    		<a class="pull-left" href="#">
   			 <iframe width="560" height="315" src="http://www.youtube.com/embed/tH3V93MSaP0?rel=0&wmode=transparent" frameborder="0" allowfullscreen></iframe>
    		</a>
   			 <div class="media-body">
    		<h2 class="media-heading">Bienvenidos !!!</h2>
            <p>Esperamos esten pasando un grandioso día !!! Bienvenidos sean ustedes a esto que es Infinite System ! Videojuego para pc
			en donde tu tomas control de tu historia. De momento se encuentra en desarrollo pero sean pacientes !!! en este sitio
			encontraran toda la información pertinente al desarrollo. Crea tu estilo, vive tu historia, esto es Infinite System~</p>
			<div class="fb-like" data-href="http://infinitesystem.comyr.com/index.php" data-send="true" data-width="450" data-show-faces="true" data-font="lucida grande"></div>
    		</div>
   		 </div>
		 <hr>
         <div class="row">
           <?php require_once("headE.php"); ?> 
        </div><!-- @end .row -->
        <div class="row">
		<p class="text-center"><a class="btn btn-large btn-block btn-primary" href="eventos.php">Ir a Eventos</a></p>
		</div>
        <hr>
        
        <h2>Noticias, noticias...noticias !</h2>
        <div class="alert alert-info">
          <strong>Note:</strong> Las noticas se actualizan semanalmente :D</div>
        
      <?php require_once("headN.php"); ?> 
       
		<p class="text-center"><a class="btn btn-large btn-block btn-primary" href="noticias.php">Ir a Noticias</a></p>
      <hr>
	  </div><!-- @end .container -->
    </div><!-- @end #main-content -->
<?php require_once("footer.php"); ?>     
</body>
</html>