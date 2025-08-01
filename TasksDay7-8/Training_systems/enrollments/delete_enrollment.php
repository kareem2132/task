<?php
include("../db.php");
$id=$_GET["id"];
$sql="DELETE FROM enrollments WHERE id=$id";
mysqli_query($conn,$sql);
header("Location:enrollment.php");