<?php
//Setze die übergebene Volume als Variable
$volume = $_POST["volume"];

//Ändere die Lautstärke in MPC
system("mpc volume ".$volume);

?>
