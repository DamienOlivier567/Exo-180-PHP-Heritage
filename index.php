<?php

/**
 * 1. Créez une classe Habitation, elle contiendra les propriétés:
 *    - pays ( string )
 *    - ville ( string )
 *    - code postal ( entier ou string )
 *    - chambres ( entier )
 *    - pièces ( entier )
 *
 * Définissez tous les setters et les getters.
 *
 *
 *
 * 2. Créez une classe Maison qui étend de Habitation, elle contiendra les propriétés:
 *    - jardin ( booleen )
 *    - etages ( entier )
 *    - garage ( booleen )
 *
 * Définissez tous les getters et les setters.
 *
 *
 *
 * 3. Créez une classe Appartement qui étend de habitation, elle contiendra les propriétés:
 *    - garage ( booleen )
 *
 * Définissez tous les getters et les setters.
 *
 *
 *
 * 4. Créez deux instances de Maison et invoquez toutes les méthodes définies, sauf les setters (dans index.php).
 *
 *
 *
 * 5. Créez une instance de Appartement et invoquez toutes les méthodes définies, y compris les setters (dans index.php).
 */

require "./classes/Habitation.php";
require "./classes/Maisons.php";
require "./classes/Appartement.php";

$myHouse1 = new Maison("France", "Anor", 59186, 4, 10, true, 0, true);
echo $myHouse1->getPays()."<br>";
echo $myHouse1->getVille()."<br>";
echo $myHouse1->getCodePostale()."<br>";
echo $myHouse1->getChambres()."<br>";
echo $myHouse1->getPieces()."<br>";
echo $myHouse1->isJardin()."<br>";
echo $myHouse1->getEtage()."<br>";
echo $myHouse1->isGarage()."<br><br>";

$myHouse2 = new Maison("France", "Fourmies", 59610, 2, 4, false, 2, false);
echo $myHouse2->getPays()."<br>";
echo $myHouse2->getVille()."<br>";
echo $myHouse2->getCodePostale()."<br>";
echo $myHouse2->getChambres()."<br>";
echo $myHouse2->getPieces()."<br>";
echo $myHouse2->isJardin()."<br>";
echo $myHouse2->getEtage()."<br>";
echo $myHouse2->isGarage()."<br><br>";

$myApps1 = new Appartement("Bordeciel", "Fort-Dragon", 0006, 7, 5, false);
echo $myApps1->getPays()."<br>";
echo $myApps1->getVille()."<br>";
echo $myApps1->getCodePostale()."<br>";
echo $myApps1->getChambres()."<br>";
echo $myApps1->getPieces()."<br>";
echo $myApps1->isGarage()."<br><br>";

$myApps1->setPays("Velen");
$myApps1->setVille("Novigrad");
$myApps1->setCodePostale(547);
$myApps1->setChambres(47);
$myApps1->setPieces(54);
$myApps1->setGarage(false);