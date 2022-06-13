 

 <?php

include connect.php

$id = (string)readline('Quel est l\'ID de l\'employé à supprimer ?')
$nom = (string)readline('Quel est le nom de l\'employé à supprimer ?')
$test =('SELECT id_personnel, nom_personnel FROM perosnnel WHERE id_personnel=$id and nom_personnel=$nom');

if(mysqli_num_rows(mysqli_query($mysqli, $test)));
{
	mysqli_query($mysqli, 'DELETE FROM personnel WHERE id_personnel=$id and nom_personnel=$nom')
	echo 'l\'utilisateur est supprimé'
}
else
{
	echo 'l\'utilisateur n\'existe pas'
}

 ?>

 

 