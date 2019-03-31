<!DOCTYPE html>
<html>
<head>
  <title> 
  Kecskeméti fürdő
		</title>
  <meta charset="utf-8">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="css/style.css" type="text/css">
 <body>
 
 <nav class="navbar navbar-inverse">
  <div class="container-fluid menu">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="index.php" class="logo"><img id="kep" src="logo/hiros-sport-logo.png"></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar"">
	<ul class="nav navbar-nav">
      <?php foreach ($oldalak as $url => $oldal) { ?>
            <?php echo (($oldal == $keres) ? '' : '') ?>
            <li> <a href="<?php echo ($url == '/') ? '.' : ('?oldal=' . $oldal['fájl'])
                ?>"><?php echo $oldal['szoveg'] ?></a>  </li>
                 
           
<?php } ?>
</ul>

      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
  </div>
</nav>
  
<div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-md-2 sidenav">
      <p><a href="#">Link</a></p>
      <p><a href="#">Link</a></p>
      <p><a href="#">Link</a></p>
    </div>
    <div class="col-md-8 text-left"> 
      <?php
	  
  include("oldal/{$keres['fájl']}.php");
?>
    
    </div>
    <div class="col-md-2 sidenav">
      <div class="well">
        <p>A</p>
      </div>
      <div class="well">
        <p>A</p>
      </div>
    </div>
  </div>
</div>

<footer class="container-fluid text-center">
  <p>Footer Text</p>
</footer>
 
</body>
</html>