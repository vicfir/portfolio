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
        <h1>Curriculum vitae</h1>

        <div class="cv">
            <a href="./images/CV.jpg" data-lightbox="galerie" data-title="cv">
                <img src="./images/CV.jpg" alt="cv">
            </a>
        </div>
    </main>

    <img class="burger" src="./images/burger.png" alt="menu" onclick="toggle();">

    <?php include "footer.php"; ?>

    <script src="./lightbox/js/lightbox-plus-jquery.min.js"></script>
    <script src="./menu.js"></script>
</body>
</html>