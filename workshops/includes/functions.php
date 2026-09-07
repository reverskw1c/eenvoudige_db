<?php
/*
 * Author: Remco Evers
 * Date: 1-9-26
 *
 * Alle functions van deze app
 */

function ShowName($lastname)
{
    echo "Mijn naam is Remco $lastname";
}

/*
 * Functie CalculateMonths()
 * 2 variabelen(parameter) 1 bedrag per maand en 1 met een totaalbedrag
 * De functie moet vervolgens terug geven hoeveel maanden je bezig bent om tot het totaalbedrag te komen
 */

//Functieaanmaken met 2 parameters $month, $total
function CalculateMonths($month, $total)
{
    $totalMonths = $total/$month;
    $savedMoney = 0;
    $countMonths = 0;

    //Loop maken die leke maan laat zien hoeveel het bedrag is opgelopen
    while($savedMoney < $total)
    {
        $savedMoney = $savedMoney + $month;
        $countMonths = $countMonths + 1;
//        $countMonths++;

        echo "na $countMonths maanden is mijn spaarbedrag: $savedMoney <br>";
    }

    return "Ik ben $totalMonths maanden bezig dit bedrag te betalen.";
}

//Berekening aantal maanden opslaan in $totalMonths.

//output: Het aantal maanden om bij het total te komen is ..


