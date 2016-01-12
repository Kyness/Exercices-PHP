<?php 
	include('meta.html');
	include('connect.inc.php');
?>

<?php 
	$uniqid_recup = $_GET["id"];
	$state_recup = $user["state"];

	$query = $connexion->prepare('SELECT * FROM users WHERE uniqid = :uniqid');
	$query->bindValue(':uniqid', $uniqid_recup);
	$query = $connexion->prepare('SELECT * FROM users WHERE state = :state');
	$query->bindValue(':state', $state_recup);
	$query->execute();
	$user = $query->fetch();

	$errors_existe = array();
	$errors_temps = array();
	$date_inscription = $user['date'];
	$timesub = strtotime($date_inscription);
	$currenttime = time();


	if($uniqid_recup != ''){
		if($state_recup == "off"){
			if($currenttime > ($timesub + 30*60)){
				$errors_temps['state'] = "Vous avez dépassé le temps imparti pour valider votre adresse.";
			}else{
				$sql= 'UPDATE users SET state="on" WHERE nom=$uniqid_verif';
				echo "Votre mail est validé. Vous faites donc partie de notre mailinglist ! ";
			}

		}else{
			$errors_existe['state'] = "Vous avez déjà confirmé cette adresse.";
		}
	}


?>
<body>
	
	<div class="confirm">
		<?php if (isset($errors_temps)) echo '<h1>Désolé vous avez mis trop de temps pour confirmer votre email. <a href="http://delphinegregoire.be/php/mailinglist">Veuillez recommencer</a></h1>'?>
		
		<?php if (isset($errors_existe)) echo '<h1>Vous avez déjà confirmé cette adresse.</h1>'?>
		
		<?php if (!isset($errors_temps) And !isset($errors_existe)) echo '<h1>Félicitation vous êtes bien inscrit à notre mailinglist !</h1>'?>
	</div>

</body>

</html>


