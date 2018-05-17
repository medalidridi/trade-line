<?php session_start();
if (!isset($_SESSION['start']))
{header("Location: deconnecter.php");}
?>

