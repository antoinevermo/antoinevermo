 

 <?php

include connect.php

sset($_POST['modifier']))
 {
 	$id = $_POST['id'];
 	$nom = $_POST['nom'];
 	$prenom = $_POST['prenom'];
 	$adresse = $_POST['adresse'];
 	$email = $_POST['email'];
 	$telephone = $_POST['téléphone'];
 	$jour = $_POST['jour'];
 	$mois = $_POST['mois'];
 	$annee = $_POST['annee'];
 	$id_service = $_POST['Id_Service'];

 	$req = $con -> prepare("UPDATE personnel SET id=$id, nom=$nom, prenom=$prenom, adresse=$adresse, email=$email, telephone=$telephone, jour=$jour, mois=$mois, annee=$annee, id_service=$id_service");
 	$req -> execute(array($id, $nom, $prenom, $adresse, $email, $telephone, $jour, $mois, $annee, $id_service));

 	
 }

 ?>

 

 