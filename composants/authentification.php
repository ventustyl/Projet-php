<?php

include './composants/connection.php';

if(isset($_POST['submit2'])) {
    $pseudo = htmlspecialchars($_POST['pseudo']);
    $mdp = htmlspecialchars($_POST['mdp']);


    $sth = $conn->prepare("SELECT * FROM utilisateur WHERE nom = '$pseudo'");
    $sth->execute();
    $resultat = $sth->fetchAll(PDO::FETCH_ASSOC);
    $dataquery = $conn->prepare("SELECT * FROM utilisateur WHERE nom = '$pseudo'");
    $dataquery->execute();
    $datafetch = $dataquery->fetchAll();
    echo'ici 1';
// verifie les inputs
    if(!empty($_POST['pseudo']) && !empty($_POST['mdp'])){
        $checkpseudo = count($resultat);       
        echo'ici 2';
        //verifie que le pseudo est dans la bdd
            if($checkpseudo != 0){
                $passhash = $datafetch[0]['mdp'];
                $id = $datafetch[0]['id'];
                echo'ici 3';
                //verifie le mdp dans la bdd
                if(password_verify($mdp, $passhash)){
                    $_SESSION['pseudo'] = $_POST['pseudo'];
                    $_SESSION['id'] = $id;                    
                  
                    $isok = "Vous êtes connecté(e), $pseudo !";                   
                    header("location:./index.php");
                
                    var_dump($_SESSION);
        
                } else {
                    $erreur = "Mot de passe incorrect !";
                }       
            } else {
                $erreur = "Pseudo introuvable !";
            }
    } else {
        $erreur = "Vous devez remplir les champs !";
    }
}
