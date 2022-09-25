
<?php
     require('./composants/connection.php'); // Fichier PHP contenant la connexion à votre BDD
   
     require('./composants/creationarticle.php');
?>



<div class="module1">
       <h1>Bienvenue <?PHP echo($_SESSION['pseudo']) ?></h1>
    </div>

    <div class="module1">
      <form method="POST" action="">
         <label for="titre">Sujet</label>
         <input type="text" name="titre">
         <label for="message">Message</label>
         <textarea name="message" cols="30" rows="10"></textarea>
         <button name="ecrire">Envoyer</button>
      </form>
    </div>