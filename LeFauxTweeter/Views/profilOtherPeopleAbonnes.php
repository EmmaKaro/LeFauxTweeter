<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Twitter</title>
    <!-- insertion de la partie css -->
    <link rel="stylesheet"  href="css/styleProfil.css">
</head>

<body>

<!-- inclusion du menu -->
<?php include("menu.php"); ?>

<!-- Bandeau de tweets, abonnements, abonnés, j'aime et edit -->
<section>
    <a href="profilTweet.php"><h4>Tweets</h4></a>
    <a href="profilAbonnement.php"><h4>Abonnements</h4></a>
    <a href="profilAbonnés.php"><h4>Abonnés</h4></a>
    <a href="profilLike.php"><h4>J'aime</h4>
    <a href="ChangeProfil.php"><h14>Editer le profil</h14></a>
</section>

<!-- inclusion de description profil-->
<?php include("descriptionProfil.php"); ?>

<!-- inclusion de find -->
<?php include ("find.php"); ?>

<!-- inclusion du pied de page -->
<?php include("pied_de_page.php"); ?>

</body>
</html>
