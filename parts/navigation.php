<nav class="main-nav">
    <ul class="main-menu" id="main-menu">
        <?php
        // načítanie údajov zo súboru json
        $links = json_decode(file_get_contents("json/navLinks.json"), true);
        // dostávame tému, na ktorej sa teraz nachádzame
        $theme = $_GET["theme"] ?? "white";
        // pre každý odkaz
        foreach ($links as $href => $title) {
            echo "<li><a href=\"$href?theme=$theme\">$title</a></li>";
        }
        // pridávame tlačidlo na zmenu témy
        AddThemeChangerButton();
        ?>
    </ul>
    <a class="hamburger" id="hamburger">
        <i class="fa fa-bars"></i>
    </a>
</nav>