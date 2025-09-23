<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
    // För att förenkla användandet av mb_ funktioner
    mb_internal_encoding("UTF-8");

    if (isset($_POST["name"], $_POST["surname"], $_POST["mail"], $_POST["password"])){ // Kontrollerar att data kommer 
        $data["name"] = $_POST["name"];
        $data["surname"] = $_POST["surname"];
        $data["mail"] = $_POST["mail"];
        $data["password"] = $_POST["password"];

        foreach ($data as $identifier) {

            if (!mb_check_encoding($identifier)) { 
                header('Location: index.html');
            }
            $identifier = htmlspecialchars($identifier);
            // Eller $data = strip_tags($data);

            $identifier = trim($identifier);
            $identifier = stripslashes($identifier);

            header('Content-Type: text/html; charset=utf-8');
            echo "<p>" . $identifier ;
        }
    }
    ?>
</body>

</html>