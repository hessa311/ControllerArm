<?php 

$database = new mysqli("localhost","root","","motor");

$sql = "SELECT motor1, motor2, motor3 , motor4, motor5 FROM motor ";
$result = $database->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo " motor1:  ". $row["motor1"]. "<br> motor2: ". $row["motor2"]. "<br>motor3:" . $row["motor3"] . "<br>motor4: ". $row["motor4"]. "<br> motor5: ". $row["motor5"]."<br>";
    }
} else {
    echo "0 results";
}

?>
