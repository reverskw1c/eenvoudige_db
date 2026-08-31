<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
    echo "Hello World!";

    //3 variabelen met naam, leeftijd en Ben je student ja/nee.
    $name = "Remco Evers";
    $age = 20;
    $isStudent = true;

    if($isStudent == true)
    {
        $studentText =  "is student";
    }
    else
    {
        $studentText = "is geen student";
    }

echo "Ik ben $name, ik ben $age jaar oud en $studentText <br>";

    echo $name . "is" . $age;

    //Check die controleer of je 18 jaar of ouder bent. Ik mag autorijden en anders ik mag geen autorijden
    //EN heb je een rijbewijs ja/nee?

    //Ik ben wel 18+ maar ik heb geen rijbewijs > Ik ben wel 18 of ouder bent, maar ik heb helaas geen rijbewijs.
    $hasLicense = false;

    if ($age >= 18 && $hasLicense == true)
    {
        $driveText = "Ik mag autorijden!";
    }
    elseif ($age >= 18)
    {
        $driveText = "Ik ben wel 18 of ouder bent, maar ik heb helaas geen rijbewijs";
    }
    else
    {
        $driveText = "Ik mag geen autorijden!";
    }
    echo $driveText;
?>

</body>
</html>