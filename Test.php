<?php
// Ställ in rätt tidszon
date_default_timezone_set("Europe/Stockholm");

// Hälsningsmeddelande
$name = "Världen"; // Du kan ändra namnet till något annat
echo "Hej, $name!<br>";

// Visa dagens datum
$currentDate = date("Y-m-d");
echo "Dagens datum är: $currentDate.<br>";

// Enkel funktion för att lägga till två tal
function addNumbers($a, $b) {
    return $a + $b;
}

// Använd funktionen och visa resultatet
$num1 = 5;
$num2 = 10;
$result = addNumbers($num1, $num2);
echo "Summan av $num1 och $num2 är: $result.";
?>