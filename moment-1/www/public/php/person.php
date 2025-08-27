<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Person</title>
</head>

<body>
    <h1>Namn och ålder</h1>
    <?php
    $name = $_POST['name'];
    $age = $_POST['age'];
    
    echo "<p>Du heter $name och är $age år gammal <br> </p>";

    if($age < 65) {
        $left = 65 - $age;
        echo "<p> Du har $left år kvar till pension</p>";
    } else {
        echo "<p> Du är pensionerad </p>";
    }
    ?>
</body>

</html>