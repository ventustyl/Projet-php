<aside>

    <?php
     session_start();
        if ($_SESSION == null) {
        include('./views/composant/authentification.php');

        include('./views/composant/inscription.php');
        } else {

            include('./views/Composant/profil.php');
        }

    ?>

    <div class="minion">
        <img class="imgminion" src="./minion.gif" alt="Les minions">
    </div>
</aside>
</main>