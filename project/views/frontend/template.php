<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title><?= $title ?></title>
        <link href="css/style.css" rel="stylesheet" />
    </head>

    <body>
        <header id="main_menu">
         <a href="index.html"></a>
         <img src="images-travel/logo-travel.jpg" alt="www.travel.com" title="travel"/></a>
          <nav id="navigation">
            <ul>
            <li><a href="index.php">Accueil</a></li>
            <li><a href="index.php?action=synopsis">Synopsis</a></li>
            <li><a href="index.php?action=chapitre">Chapitres</a></li>
            <li><a href="index.php?action=contact.php">Contact</a></li>
            </ul>
          </nav>
        </header>

          <?= $content ?>

        <footer id="footer">
           <div id="footer_content">
            <p><a href="index.php?action=infosLegales.php">Infos légales</a></p>
            <p>&copy 2017-Tous droits réservés</p>
          </div>
        </footer>
    </body>
</html>
