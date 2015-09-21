<!DOCTYPE html> 
<html lang="fr">

	<head>
		<title>Exercice PHP - TP 1</title>
		<meta charset="UTF-8">
		<style type="text/css">

		body{
			margin: 0;
			padding: 0;
		}
		h1 {
	     	font-size: 23pt;
	     	position: relative;
		 	text-align: center;
		 	top:40px;
	    }
	    h2{
		 	color: black;
		 	font-size: 23pt;
		 	text-align: center;
		 	top:100px;
		 	position: relative;
	 	}

	 	img{
		    margin: 60px calc(50% - 400px);
		    position: relative;
		    width: 800px;
	 	}
		form {
			margin: 0 auto;
			padding: 50px 0;
			position: relative;
			text-align: center;
			width: 800px;
		}
		form input, form label{
			cursor: pointer;
		}
		.r, .r2 {	
		    font-size: 20pt;
		    position: relative;
		    text-align: center;
		    z-index: 1000;
		}
		#submit {
			background-color: white;
		 	border: 1px solid #CCC;
			cursor: pointer;
		 	top:40px;
		 	position: relative;
			width: 170px;
			height: 50px;
		}
		.questions{
			margin-bottom: 20px;
		}
		.questions p{
		 	font-size: 14pt;
		}
		</style>
	</head>

	<body>

		<?php 

			$voiture = $_GET['voiture'];
			$nicolas = $_GET['nicolas'];
			$boisson = $_GET['boisson'];
			$manger = $_GET['manger'];
			$courses = $_GET['courses'];
			$laver = $_GET['laver'];


		if(($voiture == 'true') && ($courses == 'true') && ($manger == 'true') && ($nicolas == 'false') && ($boisson == 'true') && ($laver == 'true')){	
			echo "<div> <p class='r'> Ok, sois prudente !</p> </div> " ;
			echo "<img src='http://boitierrouge.com/wp-content/uploads/2014/09/Z3M-07.jpg'>";
		
		} else if (( $voiture == 'true') && ($courses == 'true') && ($manger == 'true') && ($nicolas == 'true') && ($boisson == 'true') && ($laver == 'true')){
				echo "<p class='r'> Justement, il la prend ce soir:</p> <p class='r'> Prend la Golf !</p> " ;
				echo "<img src='http://www.actualite-voitures.fr/wp-content/uploads/2013/03/voiture-volkswagen-golf-gti.jpg'>";
				
				} else if (( $voiture == 'false') && ($courses == 'true') && ($manger == 'true') && ($nicolas == 'false') && ($boisson == 'true') && ($laver == 'true')){
					echo "<p class='r'> Arrete d'essayer de me soudoyer ! </p> ";
					echo "<img src='https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcRHtcaFz2Ypodq06iy745dRCZNIKVzUw1R014vVFTjXXDZc5YHR'>";
					
					} else if (( $voiture == 'false') && ($courses == 'true') && ($manger == 'true') && ($nicolas == 'true') && ($boisson == 'false') && ($laver == 'true')){
							echo "<p class='r'> C'est ça, sortir sans boire, tu me prend pour un con? </p> " ;
							echo "<img src='https://davidjacobchemla.files.wordpress.com/2011/04/ivre-etranger.jpg'>";
							
							} else if (( $voiture == 'false') && ($courses == 'false') && ($manger == 'false') && ($nicolas == 'false') && ($boisson == 'false') && ($laver == 'false')){
									echo "<p class='r'> Tu peux toujours danser sur ta tête, tu l'aura pas ! </p> " ;
									echo "<img src='http://fr.canoe.ca/archives/divertissement/artsscene/nouvelles/media/2013/12/20131202-062245-g.jpg'>";
				 
									} else {
											echo " <p class='r2'> Mouais je vais y réflechir, mais pas ce soir ! </p>" ;

											}
			?>


		<h1>Exercice de PHP</h1>

		<form method="GET">
			<div class="questions">

		   		<p>Papa, peuuux avoir la voiture pour ce soir?</p>
		   		<label  for="voiture_yes"> oui </label>
	      	    <input type="radio" value="true" id="voiture_yes" name="voiture" <?php if( $_GET['voiture']=='true'){ echo 'checked="checked"';} ?> >

	      	    <label  for="voiture_no"> non </label>
	      	    <input type="radio" value="false" id="voiture_no"  name="voiture" <?php if( $_GET['voiture']=='false'){ echo 'checked="checked"';} ?> >
	   	  
			</div>
			<div class="questions">

		   		<p>Tu la laisse bien à Nicolas</p>
		   		<label  for="nicolas_yes"> oui </label>
	      	    <input type="radio" value="true" id="nicolas_yes"  name="nicolas" <?php if( $_GET['nicolas']=='true'){ echo 'checked="checked"';} ?> >
	      	    <label  for="nicolas_no"> non </label>
	      	    <input type="radio" value="false" id="nicolas_no"  name="nicolas" <?php if( $_GET['nicolas']=='false'){ echo 'checked="checked"';} ?> >
	   	   
			</div>
			<div class="questions">

		   		<p>Promis je bois pas !</p>
		   		<label  for="boisson_yes"> oui </label>
	      	    <input type="radio" value="true" id="boisson_yes"  name="boisson" <?php if( $_GET['boisson']=='true'){ echo 'checked="checked"';} ?> >
	      	    <label  for="boisson_no"> non </label>
	      	    <input type="radio" value="false" id="boisson_no"  name="boisson"<?php if( $_GET['boisson']=='false'){ echo 'checked="checked"';} ?> >
	   	   
			</div>
			<div class="questions">

		   		<p>Même si je te ramène à manger?</p>
		   		<label  for="manger_yes"> oui</label>
	      	    <input type="radio" value="true" id="manger_yes"  name="manger" <?php if( $_GET['manger']=='true'){ echo 'checked="checked"';} ?> >
	      	    <label  for="manger_no"> non</label>
	      	    <input type="radio" value="false" id="manger_no"  name="manger" <?php if( $_GET['manger']=='false'){ echo 'checked="checked"';} ?> >
	   	   
			</div>
			<div class="questions">

		   		<p>Je ferai les courses cette semaine...</p>
		   		<label  for="courses_yes"> oui </label>
	      	    <input type="radio" value="true" id="courses_yes"  name="courses" <?php if( $_GET['courses']=='true'){ echo 'checked="checked"';} ?> >
	      	    <label  for="courses_no"> non </label>
	      	    <input type="radio" value="false" id="courses_no"  name="courses" <?php if( $_GET['courses']=='false'){ echo 'checked="checked"';} ?> >
	   	   
			</div>
			<div class="questions">

		   		<p>Bonnnn et je la laverais ce week-end...</p>
		   		<label  for="laver_yes"> oui</label>
	      	    <input type="radio" value="true" id="laver_yes"  name="laver" <?php if( $_GET['laver']=='true'){ echo 'checked="checked"';} ?> >
	      	    <label  for="laver_no"> non </label>
	      	    <input type="radio" value="false" id="laver_no"  name="laver" <?php if( $_GET['laver']=='false'){ echo 'checked="checked"';} ?> >
	   	   
			</div>
			<input id="submit" type="submit" value="Steuplaaaaaaay !"/>
			
		</form>
	</body>

</html>