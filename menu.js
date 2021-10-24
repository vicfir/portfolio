function toggle() {
    "use strict";
    
    /* Mettre dans un variable x, le menu (balise nav) */
    var x = document.querySelector(".menu");

    if (x.className === "menu") {
        x.className += " affiche";
    } else {
        x.className = "menu";
    }

}