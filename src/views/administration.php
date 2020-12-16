<?php
if (isset($_POST['admin']) && $_POST['admin'] == 'connexion'){
    $_SESSION['isAdminConnected'] = $_POST['passwd'] == $_ADMIN_PASS;
}
if (isset($_POST['admin']) && $_POST['admin'] == 'logout'){
    unset($_SESSION['isAdminConnected']);
}
if (isset($_SESSION['isAdminConnected']) && $_SESSION['isAdminConnected']) {
?>
<h3 class="title is-3">À venir</h3>
<form action="index.php?page=administration" method="POST">
    <input type="hidden" name="admin" value="logout" hidden />
    <input type="submit" value="Déconnexion" />
</form
<div class="content">
    <ul>
    <?php
    foreach(getRDV() as $rdv){
        ?>
            <li> 
                <strong><?= $rdv['nom'] ?></strong>
                <ul>
                    <li>Pour : <?= $rdv['personnel'] ?></li>
                    <li>Prestation : <?= $rdv['prestation'] ?></li>
                    <li>Heure : <?= explode(' ', $rdv['date'])[1] ?></li>
                    <li>Durée : <?= $rdv['duration'] ?></li>
                </ul>
            </li>
        <?php
    }
    ?>
    </ul>
</div>
<?php
} else {
?>
<h3 class="title is-3">Connexion</h3>
<form action="index.php?page=administration" method="POST">
    <input type="hidden" name="admin" value="connexion" hidden />
    <label for="passwd">Mot de passe :</label>
    <input type="password" id="passwd" name="passwd" />
    <input type="submit" value="Connexion" />
</form>
<?php
}
