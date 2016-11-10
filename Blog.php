<!doctype html>
<html lang="fr">

<head>
	<meta charset="utf-8">
	<title>Blog</title>
	<link rel="stylesheet" href="style.css">
	<script src="script.js"></script>
</head>

<body>
<!--Appel de la page Cible-->
	<?php include ("Cible.php"); ?>

</body>
<footer>
<!--Formulaire-->
	<div class="Formulaire">
		<form action ='#' method="POST">
			<center><p>
				<label for="Pseudo">Pseudo : </label><input type ="text" name="pseudo" />
				<br/>
				<br/>
				<label for="Titre">Titre : </label><input type ="text" name="titre" />
				<br/>
				<br/>
				<label for="Message">Message : </label><input type ="text" size="50" style="height:80px;" name="message" />
				<br/>
				<br/>
				<input type="submit" value="Valider" />

			</p></center>
</div>
</form>

</footer>
</html>





