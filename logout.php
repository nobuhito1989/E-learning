<?php 
session_start();
session_destroy();

header("location: http://localhost/portfolio/register2.php");
?>