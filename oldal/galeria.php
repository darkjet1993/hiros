
<html>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="css/style.css" type="text/css">
  

<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
<script src="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
 
</head>

<body>


<div class="row" style="padding-top:45px;">
  <div class="col-md-12">

    <div id="mdb-lightbox-ui"></div>

    <div class="mdb-lightbox">
<?php
 $server ="localhost";
$user = "root";
$db="hiros";
$password="";
 
$kapcsolat = new mysqli($server, $user,$password,$db);
  
  
  
	  
	  $sql = "select count(*) from galeria";
	  $result = $kapcsolat->query($sql);
	   while($row = $result->fetch_assoc())
	  {
		  $szam=$row['count(*)'];
		  for($i=1;$i<=$szam;$i++)
		  {
			 $sql1="select cim,leiras,eleres from galeria where '$i'=id";
			 $result1=$kapcsolat->query($sql1);
			 while($row1=$result1->fetch_assoc())
			 {
				 $eleres=$row1['eleres'];
				 $leiras=$row1['leiras'];
				 
				echo "<figure class=","'col-md-4'",">";
				echo "<a href=","'$eleres'"," >";
				 echo "<img src=","'$eleres'","class=","'img-fluid img-thumbnail'","alt=","'$leiras'","id=","'kep'",">";
				  echo "</a>";
				echo "</figure>";
				
			 }
		  }
		  
        
          
       
	  }
	 
?>
   
      

      

    </div>

  </div>
</div>
<script>
var mo = document.getElementById('kep');

window.onclick = function(event) {
  if (event.target == mo) {
    mo.style.display = "none";
	
  }
};
</script>
<br>
<form class="form-inline" action="feltolt.php" method="post" enctype="multipart/form-data">
<input class="form-control" type="text" name="leiras" placeholder="Kép leírás"><br><br>
<input type="file" name="file" ><br>
<button type="submit" name="submit" class="btn btn-primary">Feltölt</button>

</form>

</body>
</html>