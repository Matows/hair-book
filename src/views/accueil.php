<h3 class="title is-3"  class="has-text-primary">Présentation de notre beau salon</h3>
<h3 class="title is-3" class="has-text-info">&#128205;Lieux</h3>
<div class="columns">
    <div class="column">
        <div class="box" class="has-background-link-light">
            <p>"notre salon se trouve non loins du centre ville, pret de grand espace vert et de jolis park. ici vous trouverez notre localisation et les dates enregistrés. vous pouvez néanmoins nous contacter au <strong>0680727183</strong>"</p>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d44629.5593551354!2d5.963648539365416!3d45.64384365034989!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x478ba4386e7e3e93%3A0x408ab2ae4bab410!2s73230%20Les%20Deserts!5e0!3m2!1sfr!2sfr!4v1605518181514!5m2!1sfr!2sfr" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>
    </div>
    <div class="column is-narrow">
        <div class="box">
            <h2 class="title is-3" class="has-text-info">&#8986;Horaires</h2>
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
