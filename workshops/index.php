<?php
/*
 * Remco Evers
 * 27-8-2026
 * Eerste php bestand
*/
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Homepage</title>

    <link rel="stylesheet" href="styles/stylesheet.css">
</head>
<body>
    <?php
        //Inladen van de code uit header.php
        include "includes/header.php";
        include "includes/functions.php";

        ShowName("Evers");
        ShowName("Vermeulen");

        echo CalculateMonths(20, 10000);

        echo CalculateMonths(270, 10000);

        echo CalculateMonths(2000, 30000);
    ?>
    <main>
        <?php
            echo "<h1>Homepage eenvoudige database</h1>";

            echo "<p>test</p>";

            //Variabelen
            $schoolName = "Koning Willem 1 College";

            // Mijn school is: ''
            echo "Mijn school is: $schoolName";

            echo 6*6;
        ?>
    </main>
</body>
</html>

