<?php 

$database = new mysqli("localhost","root","","motor");

$sql = "SELECT motor1, motor2, motor3 , motor4, motor5 FROM motor ";
$result = $database->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo " Base:  ". $row["motor1"]. "<br> Shoulder: ". $row["motor2"]. "<br>Elbow:" . $row["motor3"] . "<br>Wrist: ". $row["motor4"]. "<br> Gripper: ". $row["motor5"]."<br>";
    }
} else {
    echo "0 results";
}

?>
