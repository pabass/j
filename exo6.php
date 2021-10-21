<?php
/*ecrire un sript qui genere un jour un mois et une annee puis determine et affiche la date suivante et la date precedente*/
echo "exo 6 :   "."<br><br>";
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
echo("la date est : ".$jour."/ ".$mois."/ ".$annee);
echo "<br><br>";

//affichage de la date precedente
	if ($mois==4 OR $mois==6 OR $mois==9 OR $mois==11) 
	{
		if ($jour==1) 
		{
			$mois=$mois-1;
			$jour=31;
		}
		else
		{
			$jour=$jour-1;
		}
	}else
	{
		if ($jour==1) 
		{
			$mois=$mois-1;
			$jour=30;
		}
		else
		{
			$jour=$jour-1;
		}
	}


	if ($mois==3) 
	{
		if ($jour==1 AND $annee%100==0 AND $annee%400==0) 
		{
			$mois=$mois-1;
			$jour=29;
		}else
		{
			$jour=28;
			$mois=$mois-1;
		}
	}
	echo("la date precedente a celle générée est : ".$jour."/ ".$mois."/ ".$annee."<br>");

//affichage de la date suivante
if ($mois==4 OR $mois==6 OR $mois==9 OR $mois==11) 
	{
		if ($jour==30) 
		{
			$mois=$mois+1;
			$jour=1;
		}
		else
		{
			$jour=$jour+2;
		}
	}else
	{
		if ($jour==31) 
		{
			$mois=$mois+1;
			$jour=1;
		}
		else
		{
			$jour=$jour+2;
		}
	}


	if ($mois==2) 
	{
		if ($jour==29 AND $annee%100==0 AND $annee%400==0) 
		{
			$mois=$mois+1;
			$jour=1;
		}
	}
	echo"<br>"."la date suivante a celle générée est : ".$jour."/ ".$mois."/ ".$annee;
?>