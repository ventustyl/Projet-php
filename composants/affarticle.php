<?php

include './composants/connection.php';

        $reponse = $conn->query('select * from article ORDER BY idarticle desc');
while($item = $reponse ->fetch()){
  echo '<div class="article" >';
  echo $item['titre'].'<br>';
  echo $item['texte'].'<br>';
  echo $item['creation'].'<br>';
  echo '</div>';
}
