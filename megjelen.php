<html>
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

$sql="SELECT id, email, targy, uzenet FROM kapcsolat";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"], " - Email: " . $row["email"], "   Tárgy: " . $row["targy"], "  Üzenet: " . $row["uzenet"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>
</body>
</html>