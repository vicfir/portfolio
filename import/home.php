<?php include('head.php'); ?>

<body class="conteneur">
    <header>
        <img class="vf" src="./images/vf-n.png" alt="">
        <h1 class="victor">Victor Firkowski</h1>
        <h1 class="webdev">Développeur Web</h1>
        <span class="separateur"></span>
    </header>

    <?php include "menu.php"; ?>

    <main>
        <h1>Accueil</h1>

        <p class="accueil">Bonjour et Bienvenu sur mon porte folio. Je vous invite à faire un tour sur mon site afin d'en savoir un peu plus sur moi. Vous y trouverez mes travaux, mon cv, une page pour me contacter, une critique sur des tutoriels ainsi que des liens vers des sites utiles.</p>

        <p class="accueil">Depuis l’apparition d’Internet, on a accès à une quantité phénoménale d'information. Cela a énormément changé notre société et notre mode de consommation, obligeant les entreprises à s'adapter à la digitalisation. Les développeurs sont le moteur de l'évolution digitale, d'où mon intérêt pour les métiers du  web.</p>

        <p class="accueil"><em>« L’intelligence est la capacité à s’adapter au changement. »</em> </p> 
        
        <p class="right">~Stephen HawKing</p>
    </main>

    <img class="burger" src="./images/burger.png" alt="menu" onclick="toggle();">
    <script src="./menu.js"></script>
</body>
</html>