<html>
<body>
<table border="1">
<?php
$server ="localhost";
$user = "root";
$db="hiros";
$password="";

$conn = new mysqli($server, $user,$password,$db);

if ($conn->connect_error) {
    die("Kapcsolat sikertelen: " . $conn->connect_error);
} 

$sql="SELECT id, email, targy, uzenet FROM kapcsolat";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
		echo "<tr>";
		echo "<th>id</th>";
		echo "<th>Email</th>";
		echo "<th>Tárgy</th>";
		echo "<th>Üzenet</th>";
		echo "</tr>";
		echo "<tr>";
		echo "<td>",$row['id'],"</td>";
		echo "<td>",$row['email'],"</td>";
		echo "<td>",$row['targy'],"</td>";
		echo "<td>",$row['uzenet'],"</td>";
		echo "</tr>";
        
    }
} else {
    echo "0 results";
}
$conn->close();
?>
</table>
</body>
</html>