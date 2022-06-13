 

 <?php

 include connect.php

$db="gestionpersonnel";

$req = "SELECT nom_Personnel, prenom_Personnel FROM personnel ORDER BY Id_Service";

$ver = mysqli_query($db, $req) or die('Erreur : '.mysqli_error($db));


 ?>

 

 