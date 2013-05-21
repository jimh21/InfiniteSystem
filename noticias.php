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
	  <div class="fb-like" data-href="http://infinitesystem.comyr.com/noticias.php" data-send="true" data-width="450" data-show-faces="true" data-font="lucida grande"></div>
      <?php require_once("contenidoN.php"); ?> 
	  <hr>
	  <h2>Deja tu comentario~</h2>
	  <div class="fb-comments" data-href="http://infinitesystem.comyr.com/noticias.php" data-width="470" data-num-posts="10"></div>
    </div><!-- @end #main-content -->
<?php require_once("footer.php"); ?>     
</body>
</html>