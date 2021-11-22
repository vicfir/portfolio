<?php include('head.php'); ?>

<body class="conteneur">
    <header>
        <img class="vf" src="./images/vf-n.png" alt="">
        <h1 class="victor">Victor Firkowski</h1>
        <h1 class="webdev">Développeur Web</h1>
        <span class="separateur"></span>
        <a href="./?page=admin"><img class="imgadmin" src="./images/imgadmin.png" alt="admin"></a>
    </header>

    <?php include "menu.php"; ?>

    <main>
        <h1>Tutoriels</h1>

        <div class="tuto">
            <div class="retenir">
                <h2>Choses à retenir</h2>
                <p>Par défaut tous les éléments sur notre page sont en positionnement static, ils dépendent du contenu, les éléments se mettent les uns à la suite des autres. <br><br>

                Absolut: l'élément est positionné de manière absolue par rapport à un autre élément. Il prend en compte les propriétés top, left, bottom et right. <br><br>

                Fixed: l'élément est fixé par rapport à la fenêtre (reste au même endroit en défilant sur la page). <br><br>

                Relative: avec les propriétés top, left, bottom et right, on peut décaler l'élément. Un élément qui est en position relative change le comportement des enfants qui sont en positionnement absolut. <br><br>

                Sticky: dès que l'élément va sortir du cadre il prend le même comportement que le positionnement fixed jusqu'à la fin de son parent ou il reste bloqué. <br><br>
                </p>
            </div>
            
            <div class="tutos">
                <h2>Tutoriel que je recommande :</h2>
                    <a href="https://www.youtube.com/watch?v=YGm1T7bVmJQ&t=927s&ab_channel=Grafikart.fr" target="_blank"><img src="./images/imgTuto/grafikart.jpg" alt="grafikart"><br>Grafikart est connu pour la qualité de ses vidéos explicatives sur le développement web et son tutoriel sur le positionnement n'est pas une exception. Dans ce tutoriel on voit tous les types de positionnement en profondeur. Il nous explique comment les utiliser, en montrant des exemples ainsi que des problèmes qu'on pourrait rencontrer et des propriétés pour compléter notre code.</a>

                <h2>Tutoriel à éviter :</h2>
                    <a href="https://www.youtube.com/watch?v=YVLwLjvVOaQ&ab_channel=professeurkhalid" target="_blank"><img src="./images/imgTuto/khalid.jpg" alt="professeur khalid"><br>Je ne recommande pas ce tutoriel car il est beaucoup trop court et il manque de contenu, en 2 minutes on survole vaguement tous les types de positionnement. On pourrait considérer regarder cette vidéo comme un rappele de matière si on arrive à s'habituer à la voix de synthèse et le style graphique digne des forums des années 90.</a>
            </div>
        </div>
    </main>

    <img class="burger" src="./images/burger.png" alt="menu" onclick="toggle();">

    <?php include "footer.php"; ?>
    
    <script src="./menu.js"></script>
</body>
</html>