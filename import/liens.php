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
        <h1>Liens</h1>

        <h2>Une liste de liens vers des sites intéressants pour le web</h2>

        <div class="liens">
            <a href="https://www.awwwards.com/" target="_blank">
                <div class="titre_mobile">
                    <h3>Awwwards</h3>
                    <img src="images/imgLiens/awwwards.png" alt="awwwards">
                </div>
                <div class="titre_ordi">
                    <h3><img src="images/imgLiens/awwwards.png" alt="awwwards"><br> Awwwards :<br><br>  Le site Awwward récompense les sites web du monde entier en prenant compte les 3 piliers: Design, Créativité et Innovation. </h3>
                </div>
            </a>

            <a href="https://www.codewars.com/" target="_blank">
                <div class="titre_mobile">
                    <h3>Codewars</h3>
                    <img src="images/imgLiens/codewars.png" alt="codewars">
                </div>
                <div class="titre_ordi">
                    <h3><img src="images/imgLiens/codewars.png" alt="codewars"><br>Codewars :<br><br>Sur la plateforme, les développeurs se perfectionnent en résolvant des exercices de programmation.</h3>
                </div>
            </a>

            <a href="https://developer.mozilla.org/fr/" target="_blank">
                <div class="titre_mobile">
                    <h3>Developer Mozilla</h3>
                    <img src="images/imgLiens/mozilla.png" alt="developer mozilla">
                </div>
                <div class="titre_ordi">
                    <h3 ><img src="images/imgLiens/mozilla.png" alt="developer mozilla"><br>Developer Mozilla :<br><br>Le Mozilla Developer Network (MDN) est une plateforme évoluée d’apprentissage des technologies web et des logiciels qui animent le Web.</h3>
                </div>
            </a>

            <a href="https://stackoverflow.com/" target="_blank">
                <div class="titre_mobile">
                    <h3 class="titre_mobile">Stackoverflow</h3>
                    <img src="images/imgLiens/overflow.png" alt="stack overflow">
                </div>
                <div class="titre_ordi">
                    <h3><img src="images/imgLiens/overflow.png" alt="stack overflow"><br>Developer Mozilla :<br><br>Stack Overflow est un site web proposant des questions et réponses sur un large choix de thèmes concernant la programmation informatique.</h3>
                </div>
            </a>

        </div>
    </main>

    <img class="burger" src="./images/burger.png" alt="menu" onclick="toggle();">
    <script src="./menu.js"></script>
</body>
</html>