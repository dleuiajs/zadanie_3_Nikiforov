<?php

// pridanie tlačidla na zmenu témy
function AddThemeChangerButton()
{
    // dostávame tému, na ktorej sa teraz nachádzame
    $theme = $_GET["theme"] ?? "white";
    // zmenime tému
    if ($theme == "black") {
        $theme = "white";
    } else {
        $theme = "black";
    }
    // zobrazujeme tlačidlo 
    echo "<li><a href=\"".parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)."?theme=$theme\">Prepnúť tému</a></li>";
}

// zmeny štýlu prvkov v závislosti od témy
function AddThemeChangerStyle($blackColor = "#555555")
{
    // dostávame tému, na ktorej sa teraz nachádzame
    $theme = $_GET["theme"] ?? "white";
    // premenná farby, kde je predvolene nastavená biela
    $color = "#ffffff";

    // ak je téma aktuálne tmavá
    if ($theme == "black")
        $color = $blackColor; // nastavíme farbu na čiernu (odtieň farby môžeme určiť pri volaní funkcie)
    echo "style=\"background-color: $color\""; // pridávame style
}

?>