<?php

require './composants/connection.php'; // Fichier PHP contenant la connexion à votre BDD


require './composants/authentification.php';

?>

<div class="module1">
    <form method="POST" action="">
        <label for="pseudo">pseudo</label>
        <input type="text" placeholder="votre pseudo" name="pseudo">
        <label for="motdepasse">mot de passe</label>
        <input type="password" name="mdp" placeholder="mot de passe">
        <div>
            <button name="submit2" type="submit">Connexion</button>
        </div>
    </form>
</div>