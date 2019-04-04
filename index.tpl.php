<!DOCTYPE html>
<html>
<head>
  <title> 
  <?php
  require("config.inc.php");
  echo $fejléc['cim'];
  ?>
  
  
		</title>
  <meta charset="utf-8">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="css/style.css" type="text/css">
  
  </head>
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
	 
	 
	<li><span id="bejelentkez" class="btn"> <?php 
  $server ="localhost";
$user = "root";
$db="hiros";
$password="";
  session_start();
$kapcsolat = new mysqli($server, $user,$password,$db);
  
  
  if(isset($_POST['submit']))
  {
	  $felhasz=$_POST['felhasznalonev1'];
	  $jel=$_POST['jelszo1'];
	  $sql = "select * from bejelentkez where '$felhasz' = felhasznalonev;";
	  $result = $kapcsolat->query($sql);
	  
	  while($row = $result->fetch_assoc())
	  {
		  $nev=$row['felhasznalonev'];
		  $je=$row['jelszo'];
		  
		  
		  
		  if($je!=$jel || $nev!=$felhasz)
		  {
		 
			  echo"Rossz Jelszó vagy felhasználó!";
			 
			  return FALSE;
			  
		  }
		  else
		  {
			
			  echo $row['csaladi_nev'],"  ",$row['utonev'],"  ","(",  $row['felhasznalonev'],")";
			  
		  }
	  }
	  
	  
	  
  }
  mysqli_close($kapcsolat);
  ?>
	<span> </li>
	 <?php
	 $a="myBtn";
		 $b="btn";
		 $c="index.php";
		 $d="myBtn1";
	 if(isset($_POST['submit']))
	 {
		 
		 echo"<a href=",$c,"><li><button id=",$a," class=",$b,">Kijelentkezés</button></li></a>";
	 }
		 else
		 {
		echo"<li><button id=",$a," class=",$b,">Bejelentkezés</button></li>";
		echo"<li><button id=",$d," class=",$b,">Regisztráció</button></li>";
		 }
	 
	?>
		

		
		
		
		
		
		
		
		
      
      </ul>
    </div>
  </div>
</nav>
  
  	<div id="myModal" class="modal">

  
  <div class="modal-content">
    <span class="close">&times;</span>
    <form method="POST">
	<div class="form-group">
    <label >Felhasználónév</label>
    <input type="text" name="felhasznalonev1" class="form-control"  placeholder="Felhasználónév" required>
    <small id="emailHelp" class="form-text text-muted">Minden mezőt kötelező kitölteni</small>
  </div>
  <div class="form-group">
    <label>Jelszó</label>
    <input type="password" name="jelszo1" class="form-control"  placeholder="Jelszó" required>
  </div>
 
  <button type="submit" name="submit" class="btn btn-primary">Bejelentkez</button>
	</form>
  </div>

</div>
 
  <div id="myModal1" class="modal">

  
  <div class="modal-content">
    <span class="close" id="span1">&times;</span>
    <form method="POST" action="regisztral.php">
	<div class="form-group">
    <label >Felhasználónév</label>
    <input type="text" name="felhasznalonev" class="form-control"  placeholder="Felhasználónév" required>
    
  </div>
  <div class="form-group">
    <label>Jelszó</label>
    <input type="password" name="jelszo" class="form-control"  placeholder="Jelszó" required>
  </div>
 <div class="form-group">
    <label >Családi Név</label>
    <input type="text" name="csaladi_nev" class="form-control"  placeholder="Családi Név" required>
    
  </div>
  <div class="form-group">
    <label >Utónév</label>
    <input type="text" name="utonev" class="form-control"  placeholder="Utónév" required>
    <small  class="form-text text-muted">Minden mezőt kötelező kitölteni</small>
  </div>
  <button type="submit" name="submit1" class="btn btn-primary">Regisztrál</button>
	</form>
  </div>

</div>

  		 <script>

		 
// Get the modal
var modal = document.getElementById('myModal');
var modal1 = document.getElementById('myModal1');
// Get the button that opens the modal
var btn = document.getElementById("myBtn");
var btn1 = document.getElementById("myBtn1");
// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];
var span1 = document.getElementById("span1");
// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

btn1.onclick = function() {
  modal1.style.display = "block";
}


// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

span1.onclick = function() {
	modal1.style.display = "none";
}


// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
	
  }
}

window.addEventListener("click", function(event) {
	if(event.target == modal1) {
		modal1.style.display = "none";
	}
});



  </script>
  
  
<div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-md-2 sidenav">
      <p><a href="https://www.hiros-sport.hu/">Eredeti weboldal</a></p>
      
    </div>
    <div class="col-md-8 text-left"> 
      <?php
	  
  include("oldal/{$keres['fájl']}.php");
?>
    
    </div>
    <div class="col-md-2 sidenav">
      <div class="well">
        <script>
  (function() {
    var cx = '001819862123426215733:0rfz8lny074';
    var gcse = document.createElement('script');
    gcse.type = 'text/javascript';
    gcse.async = true;
    gcse.src = 'https://cse.google.com/cse.js?cx=' + cx;
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(gcse, s);
  })();
</script>
<gcse:search></gcse:search>
      </div>
      <div class="well">
	  
        <form method="post" action="feldolgoz.php">
		<label>Kapcsolat: </label>
  <div class="form-group row">
    <label for="staticEmail" class="col-md-2 col-form-label">Email</label><br><br>
    <div class="col-sm-10">
      <input type="email"  name="email"  required>
    </div>
  </div>
  <div class="form-group row">
    <label class="col-md-2 col-form-label">Tárgy</label><br><br>
    <div class="col-sm-10">
      <input type="text"  name="targy" required>
    </div>
  </div>
  <div class="form-group">
  <label for="comment">Üzenet</label>
  <textarea class="form-control" rows="5" name="uzenet" required> </textarea>
</div>

<input type="submit" value="küldés" class="col-md-2 col-form-label" style="width: 150px;">
<br>

</form>
<form action="megjelen.php">
<input type="submit" value="Üzenetek" class="col-md-2 col-form-label" style="width: 150px; margin-top: 5px;">
</form>
      </div>
    </div>
  </div>
</div>

<footer class="container-fluid text-center">
  <p>Footer Text</p>
</footer>
 
</body>
</html>