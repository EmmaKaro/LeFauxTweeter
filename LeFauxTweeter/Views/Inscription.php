<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Le Faux Twitter inscription</title>
  <!-- insertion de la partie css -->
  <link rel="stylesheet" href="css/styleInscription.css">
</head>

<body>

    <!-- Message d'annonce -->
    <h1>Rejoignez notre contrefacon de Twitter !!!</h1>
    <form method="post" action="/traitement">
        <ul class="form-style-1">

		<!-- Partie d'inscription du nom -->
			<div class="form-group">
				<label class="control-label" for="name">Nom:</label>
				<input type="text" class="form-control" id="name" name="name"
					required="required"/>
			</div>
			<!-- Partie d'inscription du prénom -->
			<div class="form-group">
				<label class="control-label" for="firstname">Prénom:</label>
				<input type="text" class="form-control" id="firstname" name="firstname"
					required="required"/>
			</div>

			<!-- Partie d'inscription du pseudo -->
			<div class="form-group">
				<label class="control-label" for="pseudo">Pseudo:</label>
				<input type="text" class="form-control" id="pseudo" name="pseudo"
					required="required"/>
			</div>
	
	<!-- sécurité session -->
        <?php if(isset($_SESSION['flashInscription'])) {
            echo "
           <p style='color: red'>
            " . $_SESSION['flashInscription'] . "
           </p>
        ";
        }
        ?>
			<!-- Partie d'inscription de l'email -->
			<div class="form-group">
				<label class="control-label" for="email">Addresse Email:</label>
				<input type="email" class="form-control" id="email" name="email"
					required="required"/>
			</div>

			<!-- Partie d'inscription du mot de passe -->
			<div class="form-group">
				<label class="control-label" for="password">Mot de passe: </label>
				<input type="password" class="form-control" id="password" name="password"
					required="required"/>
			</div>
			<!-- Partie de confirmation du mot de passe -->
			<div class="form-group">
				<label class="control-label" for="password_confirm">Confirmer votre mot de passe:</label>
				<input type="password" class="form-control" id="password_confirm" name="password_confirm"
					required="required"/>
			</div>

			<div>
				<label for="birth">Votre date de naissance<br/></label>
				<input type="date" name="birth" id="birth" class="field-divided" placeholder="birth"/>
			</div>

			<input type="submit" class="btn btn-primary" value="Inscription" name="register"/>

		
        </ul>
    </form>

     <!-- inclusion des images -->
    <img class="phoenix1" src="img/Phoenix_right.png" HEIGHT="350" alt="un phoenix a droite de l'ecran">
    <img class="phoenix2" src="img/Phoenix_left.png" HEIGHT="350" alt="un phoenix a gauche de l'ecran">

<!-- inclusion du pied de page -->
<!--<?php include("pied_de_page.php"); ?>-->

</body>
</html>
