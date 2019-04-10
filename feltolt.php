<?php
	
	
	//ellenőrzi a fájl feltöltését
	if($_FILES['file']['error'] > 0) { echo 'Hiba a feltöltés közben..próbáld újra!'; }
	
	
	//engedélyezett kiterjesztések
	$extsAllowed = array( 'jpg', 'jpeg', 'png', 'gif' );
	
	
		
	$extUpload = strtolower( substr( strrchr($_FILES['file']['name'], '.') ,1) ) ;
	//kiterjesztés ellenőrzése
	
	if (in_array($extUpload, $extsAllowed) ) { 
	
	//feltöltés
	
	$name = "image/{$_FILES['file']['name']}";
	$result = move_uploaded_file($_FILES['file']['tmp_name'], $name);



$file = $_FILES['file'];

$cim=$file['name'];
$eleres = $name;
$leiras = $_POST['leiras'];
	
$server ="localhost";
$user = "root";
$db="hiros";
$password="";
 
 
$kapcsolat = new mysqli($server, $user,$password,$db);
	
	if($result){
		
		
	}
		
	} else { echo 'Fájl nem érvényes'; }
	
$sql = "INSERT INTO galeria (cim,leiras , eleres)
VALUES ('$cim','$leiras', '$eleres')";


if ($kapcsolat->query($sql) === TRUE) {
 
 echo "Sikeres fájlfeltöltés";
 
	
} else {
    echo "Error: " . $sql . "<br>" . $kapcsolat->error;
}
mysqli_close($kapcsolat);


	
	
?>