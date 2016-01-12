<?php include('meta.html'); ?>
   
   <body>
     <?php
      if ($_SESSION['logged_in'] != 'ok'){
          
          if (count($_POST) > 0){
              
              $email = trim(strip_tags($_POST['email']));
              $password = trim(strip_tags($_POST['password']));
              
             
              $errors = array();
              
              if ($email == '') {
                  $errors['email'] = 'Veuillez entrer votre nom d\'utilisateur';
              }
              
              if ($password == '') {
                  $errors['password'] = 'Veuillez entrer votre mot de passe';
              }
              
              if (count($errors) < 1) {
                  if($email == $admin_email && $password == $admin_password){
                      $_SESSION['logged_in'] = 'ok';
                  }
              }
              
          }
          
      } else {
          include 'administrateur.php';
      }
     ?>

	<a href="index.php">Inscription Mailingist</a>
	<form class="pure-form" method="POST">
		<h1>Indiquez vos identifiants :</h1>
        <input type="email" placeholder="Email">
        <input type="password" placeholder="Password">
		<input class="pure-button" type="submit" value="Connexion"/>
	</form>

	</body>

</html>


