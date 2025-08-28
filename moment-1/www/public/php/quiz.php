<!DOCTYPE html>
<html lang="sv">

<head>
    <meta charset="UTF-8" />
    <title>Quiz med Formulär och PHP</title>
</head>

<body>
    <h1>Resultat</h1>
    <?php
    $correct = [
        0 => "php",
        1 => "js",
        2 => "f5",
        3 => "mixolydian",
        4 => "thelahunginjeet",
        5 => "absentlovers"
    ];

    $points = 0;

    for ($i = 0; $i < count($correct); $i++) {
        $ans = $_POST['q' . ($i + 1)];

        if ($ans == $correct[$i]) {
            $points++;
        }
    }

    if ($points < 3) {
        echo "Du fick $points av " . count($correct) . " läs på lite mer";
    } else if ($points == 3 || $points ==4) {
        echo "Du fick $points av " . count($correct) . " inte halvt dåligt";
    } else {
        echo "Du fick $points av " . count($correct) . " Smart grabb";
    }

    ?>
</body>

</html>