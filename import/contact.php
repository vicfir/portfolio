<?php

// dépendances
require_once "config.php";

// ini_set('SMTP',SMTP_HOST);
// ini_set('smtp_port',SMTP_PORT);
// ini_set('sendmail_from',MAIL_ADMIN);

// si le formulaire a été envoyé
if(!empty($_POST)){
    // traîtement des variables (htmlspecialchars est souvant inutile sans insertion dans la DB)
    $thename = htmlspecialchars(trim($_POST['thename']),ENT_QUOTES);
    $themail = filter_var(trim($_POST['themail']), FILTER_VALIDATE_EMAIL);
    $thesubject = strip_tags(trim($_POST['thesubject']));
    $thetext = strip_tags(trim($_POST['thetext']));
    // si au moins 1 équivalante à vide ou false
    if(empty($thename) || !$themail || empty($thetext) || empty($thesubject) ){
        // création d'une variable pour l'erreur
        $message = "Votre mail n'a pas été envoyé, veuillez recommencer.";
    }else{
        // on va créer nos variables pour l'envoi des mails

        // premier, envoi du mail à l'admin
        $aQui   = MAIL_ADMIN;
        $message = $thename." : \n".$thetext;
        $entete = array(
             'From' => "$themail",
             'Reply-To' => "$themail",
             'X-Mailer' => 'PHP/' . phpversion()
        );

        mail($aQui, $thesubject, $message, $entete);

        // envoi du mail de confirmation à l'utilisateur
        $aQui   = $themail;
        $sujet = 'Merci pour votre mail.';
        $message = "Vous recevrez une réponse dans les plus brefs délais.";
        $entete = array(
             'From' => MAIL_ADMIN,
             'Reply-To' => MAIL_ADMIN,
             'X-Mailer' => 'PHP/' . phpversion()
        );

        mail($aQui, $sujet, $message, $entete);

        // mail($themail, 'Depuis 23-mail', $thename." à écrit : \n".$thetext);
        // création de la variable de confirmation
        $message = "Votre mail a bien été envoyé, merci.";
    }
}

?>

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

        <h1>Contact</h1>

        <?php
            if(isset($message)):
        ?>
            <h3><?=$message?></h3>
        <?php
            endif;
        ?>

        <form action="" name="contact" method="POST">
            <input type="text" name="thename" placeholder="Votre nom" required /><br>
            <input type="text" name="themail" placeholder="Votre adresse mail" required /><br>
            <input type="text" name="thesubject" placeholder="Sujet" required /><br>
            <textarea name="thetext" placeholder="Votre texte" required></textarea><br>
            <input type="submit" value="Envoyer votre message"/>
        </form>
    </main>

    <img class="burger" src="./images/burger.png" alt="menu" onclick="toggle();">

    <?php include "footer.php"; ?>

    <script src="./menu.js"></script>
</body>
</html>