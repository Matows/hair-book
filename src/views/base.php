<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title><?= $_website_name ?></title>
    <link rel="stylesheet" type="text/css" href="https://s.sinux.sh/bulma/bulma.min.css" />
    <link rel="stylesheet" type="text/css" href="<?= $_ROOT_URL ?>/static/css/style.css" />
</head>
<body>
    <nav class="navbar is-light" role="navigation" aria-label="main navigation">
        <div class="navbar-brand">
            <div class="navbar-item">
                <a href="./index.php?page=accueil" class="navbar-item title is-2"><?= $_website_name ?></a>
            </div>
            <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navMenu">
              <span aria-hidden="true"></span>
              <span aria-hidden="true"></span>
              <span aria-hidden="true"></span>
            </a>
        </div>
        <div class="navbar-menu" id="navMenu">
            <div class="navbar-start">
                <a href="./index.php?page=accueil" class="navbar-item">Accueil</a>
                <a href="./index.php?page=rdv" class="navbar-item">Rendez-Vous</a>
                <a href="./index.php?page=personnel" class="navbar-item">Présentation du personnel</a>
                <a href="./index.php?page=prestation" class="navbar-item">Prestations</a>
                <a href="./index.php?page=contact" class="navbar-item">Contact</a>
            </div>
            <div class="navbar-end">
                <div class="navbar-item">
                    <div class="buttons">
                        <a href="./index.php?page=compte" class="button">Compte</a>
                        <a href="./index.php?page=administration" class="button">Administration</a>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <main class="section">
        <div class="container">
            <h2 class="title is-2" class="has-text-centered" class="has-text-primary"><?= $_PAGE_NAME ?></h2>
            <?php include(__DIR__ . '/' . $_PAGE . '.php'); ?>
        </div>
    </main>
    <footer class="footer" class="has-background-primary" class="box">
        <div class="content has-text-centered">
            <a class="github-button" href="https://github.com/Matows/hair-book/subscription" data-size="large" data-show-count="true" aria-label="Watch Matows/hair-book on GitHub">Watch</a>
        </div>
    </footer>
    <script async defer src="https://buttons.github.io/buttons.js"></script>
</body>
</html>
<script type="text/javascript">
document.addEventListener('DOMContentLoaded', () => {

  // Get all "navbar-burger" elements
  const $navbarBurgers = Array.prototype.slice.call(document.querySelectorAll('.navbar-burger'), 0);

  // Check if there are any navbar burgers
  if ($navbarBurgers.length > 0) {

    // Add a click event on each of them
    $navbarBurgers.forEach( el => {
      el.addEventListener('click', () => {

        // Get the target from the "data-target" attribute
        const target = el.dataset.target;
        const $target = document.getElementById(target);

        // Toggle the "is-active" class on both the "navbar-burger" and the "navbar-menu"
        el.classList.toggle('is-active');
        $target.classList.toggle('is-active');

      });
    });
  }

});	
</script>
