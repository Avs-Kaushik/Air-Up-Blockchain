<?php
session_start();
$_SESSION['SID']=$_GET['a'];
header("Location:http://localhost/AIRUP/form/course-details.php");
?>