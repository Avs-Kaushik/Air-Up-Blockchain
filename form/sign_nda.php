<?php
session_start();
include("connect.php");
$iid=$_SESSION["iid"];
$sid=$_SESSION["SID"];
$temp=mysqli_query($conn,"INSERT INTO nda(iid,sid) VALUES('$iid','$sid')");
header("refresh:0.5;url=http://localhost/AIRUP/form/course-details.php");
?>