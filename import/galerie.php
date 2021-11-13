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
        <h1>Galerie</h1>

        <p class="descri">Une liste des travaux réalisés au cours.</p>

        <div class="galerie">
            <figure>
                <a href="./images/imgGalerie/prefo_g.png" data-lightbox="galerie" data-title="Site de préformation">
                    <img src="./images/imgGalerie/prefo.png" alt="Site de préformation">
                </a>
                <a href="http://victor.webdev-cf2m.be/prefo/index.html"><figcaption>Fin de préformation &#x1F5D7;</figcaption></a>
            </figure>

            <figure>
                <a href="./images/imgGalerie/madrid_g.png" data-lightbox="galerie" data-title="Site de la ville de Madrid">
                    <img src="./images/imgGalerie/madrid.png" alt="Site de la ville de Madrid">
                </a>
                <a href="http://victor.webdev-cf2m.be/madrid/index.php"><figcaption>Site de la ville de Madrid &#x1F5D7;</figcaption></a>
            </figure>

            <figure>
                <a href="./images/imgGalerie/en_att_g.jpg" data-lightbox="galerie" data-title="À venir">
                    <img src="./images/imgGalerie/en_att.jpg" alt="À venir">
                </a>
                <figcaption>À venir...</figcaption>
            </figure>
        </div>
    </main>

    <img class="burger" src="./images/burger.png" alt="menu" onclick="toggle();">

    <script src="./lightbox/js/lightbox-plus-jquery.min.js"></script>
    <script src="./menu.js"></script>
</body>
</html>