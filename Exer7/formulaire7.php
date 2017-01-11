<?php 
if (isset ($_POST['genre']) && ($_POST['nom']) && ($_POST['prenom']) && ($_FILES['monfichier']['name'])){
	echo "Bonjour " . $_POST['genre'] . $_POST['nom'] . $_POST['prenom'] . $_FILES['monfichier']['name'] ." . " ;

}
?>

<!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>Formulaire7</title>
 </head>
 <body>

 	<form method="post" action="" enctype="multipart/form-data" >
 	<p>Formulaire d'envoi de fichier</p>
 	<select name="genre">
    <option>Mr</option>
    <option>Mme</option>
    </select>
 		<label for="nom">Nom: </label>
 		<input type="text" name="nom">
 		<label for="prenom">Prénom: </label>
 		<input type="text" name="prenom">
 		<input type="file" name="monfichier" />
 		<input type="submit" value="Envoyer">
 	</form>
 </body>
 </html>