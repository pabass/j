<?php

/*ecrire un script qui genere un jour , une mois, et une année puis verifie si la date genere est valide

nb--->si l'annee est en debut de siecle divisible par 400
nb--->si l'annee n'est pas en debut de siecle divisible par 4

fevrier soit 29 soit 28

*/

define("moismin", 1);
define("moismax", 12);
define("jourmin", 1);
define("jourmax", 31);
define("anneemin", 1600);
define("anneemax", 2099);
$mois=rand(moismin,moismax);
$jour=rand(jourmin,jourmax);
$annee=rand(anneemin,anneemax);

//*Mois de fevrier
if ($mois==2) 
{
	if ($annee%100==0 AND $annee%400==0)
	{
		define(jourmax, 29);
	}else
	{
		define(jourmax, 28);
	}
}
//autres mois
if ($mois==4 OR $mois==6 OR $mois==9 OR $mois==11)
{
	define(jourmax, 30);
}
echo("la date  ".$jour."/".$mois."/".$annee."  générée est valide ");



?>