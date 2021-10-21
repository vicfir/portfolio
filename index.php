<?php

require_once "config.php";

if(!isset($_GET['page'])){

    include_once "import/home.php";
}else{
    switch($_GET['page']){
        case "galerie":
            include_once "import/galerie.php";
            break;
        case "liens":
            include_once "import/liens.php";
            break;
        case "tuto":
            include_once "import/tuto.php";
            break;
        case "contact":
            include_once "import/contact.php";
            break;
        case "cv":
            include_once "import/cv.php";
    }
}