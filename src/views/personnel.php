<section>
    <h1>Présentation du personnel :</h1>
    <div>
        <!--<div>
            <h2 class="has-text-primary">Directeur</h2>
            <p class="has-text-info">nomDirecteur</p>
            <img src="<?= $_ROOT_URL ?>/static/img/directeur.jpg"></img>
        </div>-->
        <div class="box">
            <div class="content">
            <ul>
            <?php
            foreach ($_liste_personnel as $personne) {
                ?>
                <li> <?= $personne['prenom'] . ' ' .  $personne['nom'] ?>
                    <ul>
                        <li>Spécialité : <?= $personne['specialite'] ?> </li>
                        <li>Études : <?= $personne['description'] ?> </li>
                    </ul>
                </li>
                <?php
            }
            ?>
            </ul>
            </div>

        </div>
    </div>
</section>
