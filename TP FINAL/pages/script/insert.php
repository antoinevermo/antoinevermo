
<?php

include connect.php

if(isset($_GET["Id"])) && if(isset($_GET["nom"])) && if(isset($_GET["prenom"])) && if(isset($_GET["adresse"])) && if(isset($_GET["email"])) && if(isset($_GET["numero"])) && if(isset($_GET["jour"])) && if(isset($_GET["mois"])) && if(isset($_GET["annee"])) && if(isset($_GET["service"]))

{
	$id = $_GET["Id"];
	$nom = $_GET["nom"];
	$prenom = $_GET["prenom"];
	$adresse = $_GET["adresse"];		
	$email = $_GET["email"];
	$numero = $_GET["numero"];
	$jour = $_GET["jour"];
	$mois = $_GET["mois"];
	$annee = $_GET["annee"];
	$service = $_GET["service"];

	$req = mysqli_query($link, INSERT INTO personnel(id, nom, prenom, adresse, email, numero, jour, mois, annee, service) VALUES($id, $nom, $prenom, $adresse, $email, $numero, $jour, $mois, $annee, $service));

	if($req) {

		echo "Nouvel ajout réussi"
	}

	else {

		echo "Pas de nouvel ajout"
	}
 

}







