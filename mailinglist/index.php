<?php 
	include('meta.html');
	include('connect.inc.php');
?>

<body class="index">

	<pre>
		<?php
			if($_POST){
				$email = strip_tags($_POST['email']);
				$erreurs = false;
				$uniqid = uniqid();

				function is_valid_email($email){
					$email = trim($email);
					return filter_var($email, FILTER_VALIDATE_EMAIL); 
				}

				if ($_POST['pot'] == ""){
					if((is_valid_email($email)==false)){
						$erreurs = true;
					}
					if($erreurs == false){
						include('mail.php');
						$sql = 'INSERT INTO users(email, date, uniqid, state) VALUES(:email, now(), :uniqid, :state)';
		                   $preparedStatement = $connexion->prepare($sql);
		                   $preparedStatement->bindValue('email', $email);
		                   $preparedStatement->bindValue('uniqid', $uniqid);
                   		   $preparedStatement->bindValue('state', 'off');
		                   $preparedStatement->execute();

						header("Location: merci.php");
					}else{
						$errorMail = "Veuillez indiquer un email valide !";
					}
				}else{
					header("Location: merci.php");
				}
					
			}
		?>
	</pre>
	<a href="login.php">Compte administrateur</a>
	<form class="pure-form"  method="post">
		<h1>Inscrivez-vous à notre newsletter</h1>
    	<input type="text" placeholder="Votre e-mail" name="email" required <?php if (isset($errorMail)) echo 'class="error"' ?> value="<?php if (isset($email)) echo $email ?>">
    	<?php if (isset($errorMail)) echo '<p class="erreur">Veuillez indiquer un email valide !</p>'?>
		<div id="pot">
			<label for="texte"> 1+8 = </label>
			<input type="text" id="texte" name="pot" value=""> 
		</div>
		<input class="pure-button" type="submit" value="Valider"/>
	</form>

	</body>

</html>


