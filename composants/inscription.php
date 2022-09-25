<?php

//Si on clique sur inscription
if (isset($_POST['submit'])) {

  // Recupere les variables du form inscription  
  $pseudo = htmlspecialchars($_POST['name']);
  $email = htmlspecialchars($_POST['email']);
  $mdp = htmlspecialchars($_POST['mdp']);

  //Verification des input du form inscription
  if (!empty($_POST['name'])){
 
    if(!empty($_POST['email'])){
  
        if (!empty($_POST['mdp'])){
    // On compte la taille du pseudo
    $pseudotaille = strlen($pseudo);
    // On teste qu'il soit inferieur a 15 caractères
    if ($pseudotaille <= 15) {
      // Si le $pseudo NE CONTIENT PAS de caractères spéciaux.
      if (preg_match('#^[a-zA-Z0-9]*$#', $pseudo)) {
        $checkpseudo = $conn->prepare("SELECT * FROM utilisateur WHERE nom = ?");
        $checkpseudo->execute(array($pseudo));
        $pseudoexist = $checkpseudo->rowCount();

        // SI l'adresse e-mail est bonne
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
          $reqmail = $conn->prepare("SELECT * FROM utilisateur WHERE email = ?");
          $reqmail->execute(array($email));
          $mailexist = $reqmail->rowCount();
          // Evite les doublons de mail
          if ($mailexist == 0) {

            $insertclient = $conn->prepare("INSERT INTO utilisateur(nom, email, mdp) VALUES(?, ?, ?)");
            $insertclient->execute(array($pseudo, $email, password_hash($mdp, PASSWORD_DEFAULT)));
            $isok = "Votre compte est créé !";
          
            //header("location:./index.php");
          } else {
            $erreur = "L'adresse e-mail est déjà utilisée !";
          }
        } else {
          $erreur = "Votre adresse e-mail n'est pas valide !";
        }
      } else {
        $erreur = "Votre pseudo ne doit pas contenir de charatères spéciaux !";
      }
    } else {
      $erreur = "Votre pseudo ne doit pas dépasser 15 caractères !";
    }
    } else {
      $erreur = "Votre mot de passe est vide!";
    }
  } else {
    $erreur = "Votre email est vide!";
  }
} else {
  $erreur = "Votre pseudo est vide!";
}
}

?>
