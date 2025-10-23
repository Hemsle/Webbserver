<?php
    if (isset($_SESSION['inloggad'])) {
        $logged = "index.php?page=private";
        $meny = "Logga ut";
    } else {
        $logged = "index.php?page=login";
        $meny = "Logga in";
    }
?>
<h1>Innehåll</h1>
<ul>
    <li><a href="index.php">Hem</a></li>
    <li><a href="index.php?page=blogg">Blogg</a></li>
    <li><a href="index.php?page=bilder">Bilder</a></li>
    <li><a href="index.php?page=kontakt">Kontakt</a></li>
    <li><a href="index.php?page=klotter">Klotterplank</a></li>
    <li><a href="<?= $logged; ?>"><?=$meny ?></a></li>
</ul>