<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title><?= $_website_name ?></title>
    <link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
        <h1 id="Titre"><?= $_website_name ?></h1>
        <aside>
            <ul class="Admin"><li>Administration</li></ul>
        </aside>
        <nav>
            <ul class="Menu-Deroul">
                <li>Rendez-Vous</li>
                <li>Présentation</li>
                <li>Prestations</li>
                <li>Contact</li>
            </ul>
        </nav>
        <h2><?= $_page_name ?></h2>
        <section>
            <?php include(__DIR__ . $_page . '.php'); ?>
        </section>
    <footer>
        <p>Copy-left</p>
    </footer>
</body>
</html>
