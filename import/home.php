<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css" type="text/css">
    <link rel="stylesheet" href="./style.css" type="text/css">
    <title>Accueil</title>
</head>

<body class="conteneur">
    <header>
        <img class="vf" src="./images/vf-n.png" alt="">
        <h1>Victor Firkowski</h1>
        <h1>Développeur Web</h1>
        <span class="separateur"></span>
    </header>

    <?php
    include "menu.php";
    ?>

    <main>
        <h1>Accueil</h1>
    </main>

    <img class="burger" src="./images/burger.png" alt="menu" onclick="toggle();">
    <script src="./menu.js"></script>
</body>
</html>