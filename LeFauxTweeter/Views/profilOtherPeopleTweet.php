<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Twitter</title>
    <!-- insertion de la partie css -->
    <link rel="stylesheet"  href="css/styleProfil.css">
</head>

<body>

<!--menu-->
<?php include("menu.php"); ?>

<!-- inclusion du menu -->
<section>
    <a href="profilTweet.php"><h4>Tweets</h4></a><a href="profilAbonnement.php"><h4>Abonnements</h4></a><a href="profilAbonnÃ©s.php"><h4>AbonnÃ©s</h4></a><a href="profilLike.php"><h4>J'aime</h4></a>
</section>

<!-- inclusion de description profil-->
<?php include("descriptionProfil.php"); ?>

<!-- inclusion de timeline -->
<?php include ("tlTweet.php"); ?>

<!-- inclusion du pied de page -->
<?php include("pied_de_page.php"); ?>

</body>
</html>
