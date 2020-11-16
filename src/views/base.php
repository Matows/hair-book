<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8"/>
    <title><?= $_WEBSITE_NAME ? $_WEBSITE_NAME : "Mon super site" ?></title>
</head>
<header>
    <h1><?=$_PAGE_NAME?></h1>
    <nav>
        <ul>
            <li><a href="?page=accueil">Accueil</a></li>
        </ul>
    </nav>
</header>
<body>

    <?php
        include(__DIR__ . $_PAGE . '.php');
    ?>

</body>
<footer>
    <!-- TODO -->
</footer>
</html>
