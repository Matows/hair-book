<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title><?= $_website_name ?></title>
    <link rel="stylesheet" type="text/css" href="https://s.sinux.sh/bulma/bulma.min.css" />
    <link rel="stylesheet" type="text/css" href="<?= $_ROOT_URL ?>/static/css/style.css" />
</head>
<body>
    <header class="section">
        <div class="container">
            <h1 class="title" id="Titre"><?= $_website_name ?></h1>
            <aside>
                <ul class="Admin"><li>Administration</li></ul>
            </aside>
            <nav>
                <ul class="Menu">
                <li><a href="./index.php?page=Accueil">Accueil</a></li>
                <li><a href="./index.php?page=rdv">Rendez-Vous</a></li>
                <li><a href="./index.php?page=personnel">Présentation du personnel</a></li>
                <li><a href="./index.php?page=prestation">Prestations</a></li>
                <li><a href="./index.php?page=contact">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <main class="section">
        <div class="container">
            <h2 class="title is-2"><?= $_PAGE_NAME ?></h2>
            <?php include(__DIR__ . '/' . $_PAGE . '.php'); ?>
        </div>
    </main>
    <footer class="footer">
        <div class="content has-text-centered">
            <a class="github-button" href="https://github.com/Matows/hair-book/subscription" data-size="large" data-show-count="true" aria-label="Watch Matows/hair-book on GitHub">Watch</a>
        </div>
    </footer>
    <script async defer src="https://buttons.github.io/buttons.js"></script>
</body>
</html>
