<!DOCTYPE html>
<html>
<head>
	<title>MVC - blog</title>

	<link rel="stylesheet" type="text/css" href="/php_mvc_blog/public/css/style.css">
	<link rel="stylesheet" type="text/css" href="/php_mvc_blog/public/css/app.css">

</head>
<body>

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <ul class="nav navbar-nav">
    	<li <?php 
    		$filepath = $_SERVER['REQUEST_URI'];
    		// $path_parts = pathinfo($filepath);
    		echo ($filepath == "/php_mvc_blog/") ? "class= 'active'" : "";
    	?> ><a href="/php_mvc_blog">Home</a></li>
    	<li <?php 
    		$filepath = $_SERVER['REQUEST_URI'];
    		echo (pathinfo($filepath)['filename'] == "?controller=posts&action=index") ? "class= 'active'" : "";
    	?> ><a href="?controller=posts&action=index">Posts</a></li>
    	<li <?php 
    		$filepath = $_SERVER['REQUEST_URI'];
    		echo (pathinfo($filepath)['filename'] == "?controller=about&action=index") ? "class= 'active'" : "";
    	?> ><a href="?controller=about&action=index">About</a></li>
    </ul>
  </div>
</nav>

<div class="container">
	<div class="row">
		<div class="col-sm-10 col-sm-offset-1">
			<div class="jumbotron">
				<p><?php require_once('routes.php'); ?></p>
			</div>
		</div>
	</div>	
</div>




</body>
</html>