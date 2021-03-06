<?php
  /* PHP erfordert nicht, dass Variablen beim ersten Auftreten
  deklariert werden. Meistens muss sich der Programmierer nicht
  um den Datentyp kümmern - aber eben nur meistens!*/

  //Einige Beispiele für Datentypen:

  //Aufgabe 1.1: ---Datentyp Zeichenketten (string)---
  echo "McDonalds'-Esser: \"Ich liebe es!\"<br>";

  //Aufgabe 1.2: Verkettung (concatenation)
  $version = "PHP 7";
  echo "Die Variable \$version hat den Wert $version. <br>";

  //Aufgabe 1.2: Variante
  echo "Die Variable \$version hat den Wert " . $version . "<br>";

  //Aufgabe 1.3: ---Datentyp Ganzzahl (int)---
  $zahl1 = 42;
  $zahl2 = 24;
  $summe = $zahl1 + $zahl2;
  echo "Die Summe aus $zahl1 und $zahl2 ist $summe .<br>";

  //Aufgabe 1.4: ---Datentyp Kommazahl (double)---
  $zahl1 = 42.42;
  $zahl2 = 20.00;
  $summe = $zahl1 + $zahl2;
  echo "Die Summe der Kommazahlen ist $summe.<br>";

  //Aufgabe 1.5: ---Datentyp NULL (steht nicht für 0 sondern für "kein Wert")---
  $nichts = NULL;
  echo "Dem Doppelpunkt folgt absolut nichts: $nichts <br>";

  //Aufgabe 1.6: ---Datentyp Boolean (boolean)---
  $serienJunkie = true;
  if ($serienJunkie == 1) {
  echo "Ich bin ein Serienjunkie. <br>";
  } else {
  echo "Ich habe das falsche Kolleg gewählt. <br>";
  };

  //Aufgabe 1.7: ---Datentyp Array---
  $gepackterKoffer = ["T-Shirts", "Handtuch", "Zahnbürste", "Schmusedecke"];
  echo $gepackterKoffer[3] . "<br>";

  //Alternative
  $gepackterRucksack = array("T-Shirts", "Handtuch", "Zahnbürste", "Schmusedecke");
  echo $gepackterKoffer[3] . "<br>";

  //Aufgabe 1.8: Key&Value-syntax
  $notenliste = ["John" => 1, "Paul" => "3", "George" => 4, "Ringo" => 2];
  echo "Note für Ringo: " . $notenliste["Ringo"];
?>
