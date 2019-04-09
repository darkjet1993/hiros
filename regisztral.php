<html>         
<head>
<meta charset="UTF-8">
</head>

<body>      




<?php

$server ="localhost";
$user = "root";
$db="hiros";
$password="";


$conn = new mysqli($server, $user,$password,$db);

if ($conn->connect_error) {
    die("Kapcsolat sikertelen: " . $conn->connect_error);
} 

$felhasznalo=$_POST['felhasznalonev'];
$jelszo=$_POST['jelszo'];
$csaladi=$_POST['csaladi_nev'];
$utonev=$_POST['utonev'];

$sql = "INSERT INTO bejelentkez (csaladi_nev, utonev, felhasznalonev, jelszo) values ('$csaladi', '$utonev', '$felhasznalo', '$jelszo');";

if ($conn->query($sql) === TRUE) {
   
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
mysqli_close($conn);
include("index.php");
?>
</body>
</html>
