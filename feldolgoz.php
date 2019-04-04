



<?php



if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
	echo("<br>");
} else {
  echo(" is not a valid email address");
  return FALSE;
}


if(empty($_POST['email']))
{
	echo("Töltsön ki minden mezőt");
return FALSE;
}

if(empty($_POST['targy']))
{
	echo("Töltsön ki minden mezőt");
return FALSE;
}

if(empty($_POST['uzenet']))
{
	echo("Töltsön ki minden mezőt");
return FALSE;
}

	


echo "E-mail: ", $_POST['email'],"<br>";
echo "Tárgy: ", $_POST['targy'],"<br>";
echo "Üzenet: ", $_POST['uzenet'],"<br>";

?>





<?php

$server ="localhost";
$user = "root";
$db="hiros";
$password="";

$email = $_POST['email'];
$targy = $_POST['targy'];
$uzenet = $_POST['uzenet'];

$conn = new mysqli($server, $user,$password,$db);

if ($conn->connect_error) {
    die("Kapcsolat sikertelen: " . $conn->connect_error);
} 




$sql = "INSERT INTO kapcsolat (email, targy, uzenet)
VALUES ('$email', '$targy', '$uzenet')";


if ($conn->query($sql) === TRUE) {
    
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
mysqli_close($conn);
?>
