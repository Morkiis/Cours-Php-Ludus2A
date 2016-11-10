<?php
	//Heure
		date_default_timezone_set('Europe/Paris');
		$jour = date('d');
		$mois = date('m');
		$annee = date('Y');
		$heure = date('H');
		$minute = date('i');	
	//Ouverture du fichier compteur
	$mail = fopen('compteur.txt.txt', 'a+');
	
			if(isset($_POST['pseudo']) AND isset($_POST['titre']) AND isset($_POST['message']))
				
			{
				//Enregistre les données entrer par l'utilisateur dans le fichier compteur
					fputs($mail, '<div><strong>Titre : </strong>'.htmlspecialchars($_POST['titre']).'</br>');
					fputs($mail, htmlspecialchars($_POST['pseudo']).'</br>');
					fputs($mail, $jour .'/'. $mois .'/'. $annee .'&nbsp&nbsp&nbsp&nbsp'. $heure . 'H' . $minute."<br/>");
					fputs($mail, '</br></br>'.htmlspecialchars($_POST['message']).'</br></br></div></br>');
			}
						echo '<br/>';
						echo '<br/>';
						echo '<br/>';
						fseek($mail, 0);
						// Affiche le fichier compteur 
						$ligne = fgets($mail);
						echo $ligne;
	fclose($mail);
				//Fermeture du fichier compteur
				unset($_POST['pseudo']);
				unset($_POST['titre']);
				unset($_POST['message']);
							
				?>