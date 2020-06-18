<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Twitter</title>
    <!-- insertion de la partie css -->
    <link rel="stylesheet"  href="css/styleRecherche.css">
</head>

<body>

<!-- inclusion du menu -->
<?php include("menu.php"); ?>

<h4><?php echo htmlspecialchars($_POST['recherche']);?></h4>

<!-- recherche des personnes correspondantes aux caractéres de la recherche-->
 <?php foreach ($params['users'] as $user) : ?>
<li>
    <a href="/Le-Faux-Tweeter/traitementSuivre/<?php echo $user->getId() ?>">  <h5>Suivre</h5> </a>
    <h6><?php echo $user->getPseudo(); ?></h6>
    <h7>@<?php echo $user->getUserName(); ?></h7>
    <h8><?php echo $user->getInfoPerso(); ?></h8>
</li>
<?php endforeach; ?>

<!-- inclusion du pied de page -->
<?php include("pied_de_page.php"); ?>

</body>
</html>
