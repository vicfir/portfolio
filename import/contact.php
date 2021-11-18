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
        <h1>Contact</h1>

        <form action="" name="contact" method="POST">
            <input type="text" name="thename" placeholder="Votre nom" required /><br>
            <input type="text" name="themail" placeholder="Votre adresse mail" required /><br>
            <textarea name="thetext" placeholder="Votre texte" required></textarea><br>
            <input type="submit" value="Envoyer votre message"/>
        </form>
    </main>

    <img class="burger" src="./images/burger.png" alt="menu" onclick="toggle();">

    <?php include "footer.php"; ?>

    <script src="./menu.js"></script>
</body>
</html>