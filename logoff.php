<?php
session_start();

$_SESSION['access']=false;
header("Location: page1.php");

?>