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

        <h1>Admin</h1>

        <form action="" name="login" method="POST">
            <input type="text" name="log" placeholder="Votre identifiant" required /><br>
            <input type="password" name="mdp" placeholder="Votre mot de passe" required /><br>
            <input type="submit" value="Connexion"/>
        </form>
    </main>

    <img class="burger" src="./images/burger.png" alt="menu" onclick="toggle();">

    <?php include "footer.php"; ?>

    <script src="./menu.js"></script>
</body>
</html>