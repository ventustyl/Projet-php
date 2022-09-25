<?php
        require('./composants/connection.php'); // Fichier PHP contenant la connexion à votre BDD
   
        require('./composants/inscription.php');
         // Si il y a une erreur, affiche $erreur (message écrit en rouge au dessus du formulaire).
        if(isset($erreur)) {
           echo '<div class="red">'.$erreur."</div>";
        } 
        if(isset($isok)) {
            echo '<div class="green">'.$isok."</div>";
         }
        // Si aucune erreur, affiche $isok (message écrit en vert au dessus du formulaire).
       
    ?>

    <div class="module1">
        <form action="" method="post">
            <label for="name">nom</label>
            <input type="text" name="name"  placeholder="nom">
            <label for="email">email</label>
            <input type="mail" name=email  placeholder="email">
            <label for="mdp">mot de passe</label>
            <input type="password" name="mdp"  placeholder="mot de passe">
            <button type="submit" name="submit">Inscription</button>
        </form>
    </div>