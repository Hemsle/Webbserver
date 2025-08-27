<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Person</title>
</head>

<body>
    <h1>Namn och ålder</h1>
    <?php
    $name = $_GET['name'];
    $age = $_GET['age'];
    
    echo "<p>Du heter $name och är $age år gammal <br> </p>";
    ?>
</body>

</html>