<?php 

$database = new mysqli("localhost","root","","motor");

$sql = "SELECT OnOff FROM motor ";
$result = $database->query($sql);

$sql = mysqli_query($database,"UPDATE motor SET OnOff='OFF' WHERE id='0' ");
    
echo "OFF  ";

?>
