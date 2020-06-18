<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Twitter</title>
    <!-- insertion de la partie css -->
    <link rel="stylesheet"  href="css/style.css">
</head>

<body>
    <!-- Connection au site -->
    <form method="post" action="/Le-Faux-Tweeter/traitementConnection">
        <ul class="form-style-1">
            <p>
            <input type="text" name="user_name" id="user_name" class="field-divided" placeholder="Nom d'utilisateur" size="30" maxlength="40" />
            <input type="password" name="password" id="password" class="field-divided" placeholder="Mot de passe" size="30"/>
            <input type="submit" value="Se Connecter" />
            </p>
        </ul>
    </form>
    <div class="flash">
    <!-- sécurité session -->
    <?php if(isset($_SESSION['flash'])) {
        echo "
           <p style='color: red'>
            " . $_SESSION['flash'] . "
           </p>
        ";
    }
     ?>
    </div>

    <!-- inclusion des images -->
    <img class="phoenix1" src="img/Phoenix_right.png" HEIGHT="350" alt="un phoenix a droite de l'ecran">
    <img class="phoenix2" src="img/Phoenix_left.png" HEIGHT="350" alt="un phoenix a gauche de l'ecran">

    <!-- iMessage 1 -->
    <h1>Le Twitter version Leader Price.</h1>
    
    <!-- Message 2 -->
    <h2>
      Vous n'avez pas encore de compte ? </br>
      Rejoignez notre faux Twitter dès aujourd'hui !
    </h2>

    <!-- inscription au site -->
    <a href="inscription.php"><h3>S'inscrire</h3></a>


<!-- Le pied de page -->

<?php include("pied_de_page.php"); ?>

</body>
</html>
