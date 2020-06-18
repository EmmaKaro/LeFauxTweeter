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
    <a href="profilAbonnes.php"><h4>Abonnés</h4></a>
    <a href="profilLike.php"><h4>J'aime</h4></a>
    <a href="ChangeProfil.php"><h14>Editer le profil</h14></a>
</section>

<!-- inclusion de description profil-->
<?php include("descriptionProfil.php"); ?>

<!--Section de tweets et retweet-->
<?php foreach ($params['tweets'] as $tweets) : ?>

    <li>
        <?php if ($tweets["tweet_id"] == $_SESSION['id']) {?> <a href="deleteNormalementMaisMalheureusement/<?php echo $tweets["tweet_id"] ?>">  <h15>Supprimer</h15></a> <?php }?>
        <h8><?php echo $tweets["user_name"]; ?></h8><h10><?php echo $tweets["tweet_date"];?></h10>
        <h9><?php echo $tweets["tweet_content"]; ?></h9>
        <a href="indefinisMalheureusement/<?php echo $tweets["tweet_id"] ?>">  <h10>Retweeter</h10> </a>
        <a href="traitementLike.php/<?php echo $tweets["tweet_id"] ?>"><h12>J'aime </h12> </a>
    </li>
<?php endforeach; ?>

<!-- inclusion du pied de page -->
<?php include("pied_de_page.php"); ?>

</body>
</html>
