<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Uppgifter Moment 2</title>
</head>
<body>
    <h1>Moment 2</h1>
    <?php
    echo strip_tags("Uppgift 1 med <i><b>strip_tags</b><i>", "<b>")
    ?>
    <p>Nu skrevs användes strip_tags så att strip_tags skrevs ut som <b>strip_tags</b> 
    fast än det står <i><b>strip_tags</b></i> i koden</p>
</body>
</html>