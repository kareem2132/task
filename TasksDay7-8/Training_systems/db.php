<?php
$conn=mysqli_connect("localhost","root","","train_system");
if(!$conn){
  die("connection failed: ".mysqli_connect_error());
}
?>