
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Twitter</title>
    <!-- inclusion de la partie css -->
    <link rel="stylesheet"  href="css/styleTL.css">
</head>

<body>

<!-- inclusion du menu -->
<?php include("menu.php"); ?>

<!-- aperçu du profil -->
<section>
    <h4><?php echo $_SESSION['pseudo']; ?></h4>
    <h5>@<?php echo $_SESSION['user_name']; ?></h5>
    <h6>Tweets</h6><h6>Abonnements</h6><h6>Abonnés</h6>
    <h7><?php echo $params["nb_tweets"]["COUNT(*)"]; ?></h7><h7><?php echo $params["nb_abonnement"]["COUNT(*)"]; ?></h7><h7><?php echo $params["nb_abonne"]["COUNT(*)"]; ?></h7>
    <a href="indefiniMalheureusement" ><h20>Se Déconnecter</h20></a>
</section>

<!-- Section tweets -->
<?php foreach ($params['tweets'] as $tweets) : ?>

    <li>
        <h8><?php echo $tweets["user_name"]; ?></h8><h10><?php echo $tweets["tweet_date"];?></h10>
        <h9><?php echo $tweets["tweet_content"]; ?></h9>
        <a href="indefiniMalheureusement/<?php echo $tweets["tweet_id"] ?>">  <h10>Retweeter</h10> </a><a href="/Le-faux-Tweeter/traitementLike/<?php echo $tweets["tweet_id"] ?>">  <h12>J'aime </h12> </a>
    </li>
<?php endforeach; ?>
    
<!-- inclusion du pied de page -->
<?php include("pied_de_page.php"); ?>

</body>
</html>
