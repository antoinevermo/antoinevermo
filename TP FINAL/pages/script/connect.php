 

 <?php

 $user="root";
 $mdp="";
 $db="gestionpersonnel";
 $server="localhost";

 $link=mysqli_connect($server, $user, $mdp, $db);

 if($link) {

 	echo "Connexion établie";
 }
 else {
 	die(mysqli_connect_error());
 }

 ?>

 

 