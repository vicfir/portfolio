<?php

require_once "config.php";

if(!isset($_GET['page'])){

    include_once "import/home.php";
    $title = "V.Firkowski - Accueil";
    echo "<title>".$title."</title>";
}else{
    switch($_GET['page']){
        case "galerie":
            include_once "import/galerie.php";
            $title = "V.Firkowski - Galerie";
            echo "<title>".$title."</title>";
            break;
        case "liens":
            include_once "import/liens.php";
            $title = "V.Firkowski - Liens";
            echo "<title>".$title."</title>";
            break;
        case "tuto":
            include_once "import/tuto.php";
            $title = "V.Firkowski - Tuto";
            echo "<title>".$title."</title>";
            break;
        case "contact":
            include_once "import/contact.php";
            $title = "V.Firkowski - Contact";
            echo "<title>".$title."</title>";
            break;
        case "cv":
            include_once "import/cv.php";
            $title = "V.Firkowski - CV";
            echo "<title>".$title."</title>";
            break;
        case "admin":
            include_once "import/admin.php";
            $title = "V.Firkowski - CV";
            echo "<title>".$title."</title>";
    }
}