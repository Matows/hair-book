<section>
    <h1>Présentation du personnel :</h1>
    <div>
        <div>
            <h2>Directeur</h2>
            <p>nomDirecteur</p>
            <img src="<?= $_STATIC ?>/img/directeur.jpg"></img>
        </div>
        <div>
            <?php 
                foreach ($_liste_coiffeur as $nom) {
                    echo'<table class="employes">';
                    echo '<tr>';
                    echo '<th class="titre">'.array_keys($_liste_coiffeur, $key, TRUE)[0].'</th>';
                    echo '</tr>';
                    echo '<tr>';
                    echo '<td class="nom">'.$key['nom'].'</td>';
                    echo '<td class="prenom">'.$key['prenom'].'</td>';
                    echo '</tr>';
                    echo '<tr>';
                    echo '<td'>.$key['specialite'].'</td>';
                    echo '<td'>.$key['description'].'</td>';
                    echo '</tr>';
                    echo "</table>";
                                                  }
            ?>

        </div>
    </div>
</section>