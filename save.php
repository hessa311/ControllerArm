<?php 
$output1 = $_POST['out1'];
$output2 = $_POST['out2'];
$output3 = $_POST['out3'];
$output4 = $_POST['out4'];
$output5 = $_POST['out5'];

echo "Saved successfully ";

$database = new mysqli("localhost","root","","motor");

$sql = mysqli_query($database,"UPDATE motor SET motor1='$output1' ,motor2='$output2' ,motor3='$output3' ,motor4='$output4' ,motor5='$output5' WHERE id='0' ");


?>