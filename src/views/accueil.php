<div class="columns">
    <div class="column">
        <p>Nous vous souhaitons la bienvenue sur notre fabuleux site de réservations</p>

        <h3 class="title is-3">Présentation de notre beau salon</h3>
        <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
    </div>
    <div class="column is-narrow">
        <div class="box">
            <h2 class="title is-3">Horaires</h2>
                <?php
                    foreach ($_horaires as $day => $heures) {

                        if (!empty($heures) && count($heures) == 2) {
                            echo "<p>$day : $heures[0] et $heures[1]</p>";

                        } else if (!empty($heures) && count($heures) == 1) {
                            echo "<p>$day : $heures[0]";
                        } else {
                            echo "<p>$day : fermé</p>";
                        }
                    }
                ?>
        </div>
    </div>

</div>
