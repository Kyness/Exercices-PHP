<?php include('meta.html'); ?>

<style type="text/css">
	body{
		background-color: #c0392b;
		font-family: "Roboto";
	}
	h1{
 		font-size: 20px;
 		margin-bottom: 30px;
 		text-align: center;
 	}

 	form{ 
 		background-color: #fff;
	    margin: 0 auto;
	    max-width: 800px;
	    padding: 1em;
	    width: 80%;
	}

	form img{
		margin: 0;
		width:100%;
	}
	form div + div {
    	margin-top: 1em;
	}
	label {
		display: inline-block;
		font-size: 18px;
		margin: 10px 0;
	    text-align: left;
	    width: 100%;
	}
	input, textarea{
	    border: 1px solid #999;
		cursor: pointer;
	    font: 1em sans-serif;
	    margin: 0 auto;
	    min-width: 165px;
		outline: none;
	    padding: 5px;
	    width: 50%;
	    box-sizing: border-box;
	    -moz-box-sizing: border-box;
		-webkit-transition: all 0.30s ease-in-out;
		-moz-transition: all 0.30s ease-in-out;
		-ms-transition: all 0.30s ease-in-out;
		-o-transition: all 0.30s ease-in-out;
	}
	input:focus, textarea:focus{
		border: 2px solid #999;
	}
	div#adresse p{
		margin: 40px 0 10px 0;
	}
	div#adresse textarea{
		height: 35px;
	}
	p{
		font-size: 20px;
		margin: 30px 0;
	}
	div#radio ul{
		padding: 0;
	}
	div#radio li{
		list-style: none;
		margin: 5px 0;
	}
	div#radio input{
		min-width: auto;
		width: auto;
	}
	div#radio label{
		display: inline;

	}
	div#pot{
		display: none;
		text-indent: -999999px;
	}
	input[type="submit"]{
		margin: 30px 0 30px 25%;
		width: 50%;
	}
	input.error{
		box-shadow: 0 0 5px rgba(192, 47, 53, 1);
		border: 1px solid rgba(192, 47, 53, 1);
	}
	p.erreur{
		color: #c0392b;
	    font-size: 12px;
	    margin: 0 0 7px 0;
	}
</style>

<body>

	<pre>
		<?php
			if($_POST){
				$prenom = trim(strip_tags($_POST['prenom']));
				$nom = trim(strip_tags($_POST['nom']));
				$email = strip_tags($_POST['email']);
				$date =  strip_tags($_POST['date']);
				$erreurs = false;
				$result = false;

				function is_valid_email($email){
					$email = trim($email);
					return filter_var($email, FILTER_VALIDATE_EMAIL); 
				}
				if ($_POST['pot'] == ""){
					if($prenom == ""){
						$erreurs = true;
						$errorPrenom = "Indiquez votre Prenom";
					}
					if($nom == ""){
						$errorNom = "Indiquez votre Nom";
						$erreurs = true;
					}
					if((is_valid_email($email)==false)){
						$errorMail = "Indiquez votre E-mail";
						$erreurs = true;
					}
					if($date == ""){
						$errorDate = "Indiquez votre date de naissance";
						$erreurs = true;
					}
					if($erreurs == false){
						$result = mail('delphinetravanca@gmail.com', 'Exercice 02', $date);
							
					}
					if($result == true){
						header("Location: ".$config['page_merci']);
					}else{
						echo('Il y a du avoir une erreur, réessayez !');
					}
				}else{
					header("Location: merci.html");
				}
					
			}
		?>
	</pre>
	
	<form method="post">
		<img src="http://osio.be/wp-content/uploads/2014/01/sweat-capuche.jpg">
		<h1>Inscription au Cercle Infographie</h1>
			<div>
				<label for="prenom"> Votre prenom <sup>*</sup></label><?php if (isset($errorPrenom)) echo '<p class="erreur">Veuillez indiquer votre prénom !</p>'?>
				<input type="text" tabindex="1" placeholder="Ton prenom..." name="prenom" id="prenom"  <?php if (isset($errorPrenom)) echo 'class="error"' ?> value="<?php if (isset($prenom)) echo $prenom ?>">
			</div>
			<div>
				<label for="nom"> Votre nom <sup>*</sup></label><?php if (isset($errorNom)) echo '<p class="erreur">Veuillez indiquer votre Nom !</p>'?>
				<input type="text" tabindex="2" placeholder="Ton nom..." name="nom" id="nom" <?php if (isset($errorNom)) echo 'class="error"' ?> value="<?php if (isset($nom)) echo $nom ?>">
			</div>
			<div>
				<label for="email"> Votre mail <sup>*</sup></label><?php if (isset($errorMail)) echo '<p class="erreur">Veuillez indiquer votre email !</p>'?>
				<input type="text" tabindex="3" placeholder="exemple@blabla.com" name="email" id="email" <?php if (isset($errorMail)) echo 'class="error"' ?> value="<?php if (isset($email)) echo $email ?>">
			</div>
			<div>
				<label for="date"> Votre date de naissance <sup>*</sup></label><?php if (isset($errorDate)) echo '<p class="erreur">Veuillez indiquer votre date de naissance !</p>'?>
				<input type="date" tabindex="4" placeholder="23.04.1992" max="2002-12-12" min="1940-01-01" name="date" id="date" <?php if (isset($errorDate)) echo 'class="error"' ?> value="<?php if (isset($date)) echo $date ?>">
			</div>
			<div id="adresse">
				<p>Votre adresse</p>
				<label for="rue">Rue</label>
				<textarea type="text" tabindex="5" placeholder="Nom et N° de rue" id="rue" name="adresse"></textarea>

				<label for="ville">Ville</label>
				<textarea type="text" tabindex="6" placeholder="Votre ville" id="Ville" name="adresse"></textarea>

				<label for="commune">Commune</label>
				<textarea type="text" tabindex="7" placeholder="Votre commune" id="commune" name="adresse"></textarea>
			</div>
			<div id="radio">
				<p>Pourquoi souhaites-tu intégrer le Cercle Infographie ? <sup>*</sup></p>
				<ul>
					<li>
						<input type="radio" tabindex="8" name="bapteme" id="r1" value="">
						<label for="r1">Pour rencontrer des gens.</label>
					</li>
					<li>
						<input type="radio" tabindex="9" name="bapteme" id="r2" value="">
						<label for="r2">Pour faire plus souvent la fête.</label>
					</li>
					<li>
						<input type="radio" tabindex="10" name="bapteme" id="r3" value="">
						<label for="r3">Parce qu'il parait que c'est cool.</label>
					</li>
					<li>
						<input type="radio" tabindex="11" name="bapteme" id="r4" value="">
						<label for="r4">Parce qu'il parait que ça apporte des avantages.</label>
					</li>
				</ul>
			</div>
			<div id="pot">
				<label for="texte"> 2+5 = </label>
				<input type="text" id="texte" name="pot" value=""> 
			</div>
			<div>
				<input type="submit"  tabindex="10" value='envoyer'>
			</div>
	</form>

</body>

</html>


