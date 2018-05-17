<?php
session_start();
session_destroy(); 
echo'<SCRIPT LANGUAGE="JavaScript">
parent.location.href="connexion_entreprise.php"</SCRIPT>';
?>