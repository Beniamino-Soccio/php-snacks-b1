<?php
$name = $_GET["userName"];
$mail = $_GET["userMail"];
$age = $_GET["userAge"];


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <main>
        <p>
            <?php 
                if (strlen($name) > 3 && is_numeric($age) && str_contains($mail, "@")){
                    echo "Accesso Riuscito";
                } else {
                    echo "Accesso Negato";
                }
            ?>
        </p>
    </main>
</body>
</html>