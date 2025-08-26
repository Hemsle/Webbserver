<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <h1>Namn och ålder</h1>
    <?php
    $name = $_POST['name'];
    $age = $_POST['age'];

    echo "<p>Du heter $name och är $age år gammal </p>"
    ?>  
</body>
</html>