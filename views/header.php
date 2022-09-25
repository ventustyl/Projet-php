<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <script src="menu.js" defer></script>
  <title><?= $title ?></title>
</head>

<body>

  <header>
    <div class="logo">
      <img class="image1" src="./logo afpa.png" alt="Logo Afpa">
    </div>
    <nav>
      <a id="link" href="#"><span id="burger"></span></a>
      <ul class="list-unstyled">
        <li><a href="#">Accueil</a></li>
        <li><a href="#">page 1</a></li>
        <li><a href="#">page 2</a></li>
        <?php

        echo '<li><a href="./composants/deconnexion.php">Deconnexion</a></li>';
     
             ?>
      </ul>
    </nav>
  </header>