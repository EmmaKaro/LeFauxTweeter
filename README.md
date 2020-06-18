# LeFauxTweeter


NOM ET PRENOM DES PARTICIPANTS :  Karolane PICOT & Emma PROVOT

URL VERS LE REPOSITORY GITHUB : https://github.com/EmmaKaro/LeFauxTweeter 
URL DE VOTRE SITE EN LIGNE : Aucun

BONUS TENTé : Mise en page CSS pour le site (plusieurs pages sont reliés à des .css pour leur faire une mise en page)

FONCTIONNALITES REALISEES :
- sécurité avec des mots de passe affichés en points, utilisation de POST au lieu de GET, des $_SESSION, et un .htaccess créé
- format MVC utilisé

SCHEMA DE BASE DE DONNEES : voir le pdf du MCD dans le Github

DESCRIPTION :
Voici le clone de Twitter en PHP que nous avons réalisé, et nommé très justement "LeFauxTweeter" !

REALISATION :
Nous avons subi certains soucis de réalisation, mais ce sont surtout des erreurs dans la partie PHP :
- Du côté de Emma, les fonctions PHP ne s'affichent tout simplement pas sur la page, malgré qu'elles soient bien dans le code et que Xampp ait bien été activé.
  Et même en desinstallant et ré-installant 2 fois l'application, puis avoir changé pour Wamp, le PHP n'apparaissait toujours pas, rendant impossible de savoir si les fonctions marchaient ou non de son côté.
- Du côté de Karolane, les fonctions telles que <?php include("menu.php"); ?> affichent bien le menu en haut de la page, prouvant que le problème ne vient pas du code.
  Mais il restait malgré tout des Fatal Error : Not found, empechant l'affichage de la page cherchée alors qu'elle existait bien et que la route était là pourtant.
Donc la création du Twitter était quelque peu... compliquée à finaliser...
