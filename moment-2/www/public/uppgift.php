<!DOCTYPE html>
<html lang="sv">

<head>
    <meta charset="UTF-8">
    <title>Uppgifter Moment 2</title>
</head>
<body>
    <h1>Moment 2</h1>
    <form action="index.html">
        <input type="submit" value="Inloggning">
    </form>

    <h2>PersonTest</h2>

    <?php
    echo strip_tags("Uppgift 1 med <i><b>strip_tags</b><i>", "<b>")
    ?>
    <p>Nu skrevs användes strip_tags så att strip_tags skrevs ut som <b>strip_tags</b> 
    fast än det står <i><b>strip_tags</b></i> i koden</p>

    <h1>Php Loopar</h1>
    <?php

    for($i = 1; $i < 5; $i+=0.1){
        echo $i . " ";
    }
    echo "<p> </p>";
    $i = 1;
    while ($i < 5){
        echo $i . " ";
        $i+=0.1;
    }

    $page["head"] = "<h1>Välkommen</h1>";
    $page["main"] = "<p>Detta är innehållet på min sida</p>";
    $page["footer"] = "<hr><p>Min sidfoot</p>";

    forEach($page as $value){
        echo $value . "<br>";
    }

    include('php/math.php'); 

    $summa = sum(2, 5); // Här anropas funktionen sum
    $prod = multiply(2, 5);
    $div = division(2, 5);
    $dif = subtraction(2, 5);
    
    header('Content-Type: text/html; charset=utf-8');
    echo "Summan av 2 och 5 är $summa<br>";
    echo "Produkten av 2 och 5 är $prod<br>";
    echo "Kvoten av 2 och 5 är $div<br>";
    echo "Differensen mellan 2 och 5 är $dif<br>";


    ?>
</body>
</html>