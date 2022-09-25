<?php


if(isset($_POST['ecrire'])) {
                    if(!empty($_SESSION)){
                        $titre = htmlspecialchars(addslashes($_POST['titre']));
                        $message = nl2br(htmlspecialchars(addslashes($_POST['message'])));
                        $id = $_SESSION['id'];
                        $creation = date("Y-m-d H:i:s");  
                        if (!empty($titre)) {
                            if(!empty($message)){                             
                                    //On insère les données reçues
                                    $sth = $conn->prepare("INSERT INTO article (titre, texte, id) VALUES(:titre, :texte, $id )");
                                    $sth->bindParam(':titre', $titre);
                                    $sth->bindParam(':texte', $message);
                                    $sth->execute();
                                    header("location: ./index.php");                               
                            } else {
                                $erreur = "Vous devez remplir le message !";
                            }
                        }
                        else {
                            $erreur = "Vous devez écrire un sujet !";
                        }
                    } else {
                        $erreur = "Vous n'êtes pas connecté(e) !";
                    }
                }
?>