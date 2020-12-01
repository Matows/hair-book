<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title><?= $_website_name ?></title>
    <link rel="stylesheet" type="text/css" href="https://s.sinux.sh/bulma/all.min.css" />
    <link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
        <h1 id="Titre"><?= $_website_name ?></h1>
        <aside>
            <ul class="Admin"><li>Administration</li></ul>
        </aside>
        <nav>
            <ul class="Menu">
                <li><a href="./index.php?PAGE=RendezVous">Rendez-Vous</a></li>
                <li><a href="./index.php?PAGE=Presentation">Présentation</a></li>
                <li><a href="./index.php?PAGE=Prestations">Prestations</a></li>
                <li><a href="./index.php?PAGE=Contact">Contact</a></li>
            </ul>
        </nav>
        <h2><?= $_page_name ?></h2>
        <main>
            <?php include(__DIR__ . $_page . '.php'); ?>
        </main>
    <footer>
        <p>Copy-left</p>
    </footer>
</body>
</html>
