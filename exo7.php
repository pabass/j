exo7:

<?php
/*ecrire un scripte qui genere 3 nombres puis les tries dans l'ordre croissant et apres dans l'ordre decroissant*/

$nombreX=rand(1,100);
$nombreY=rand(1,100);
$nombreZ=rand(1,100);
echo("<br>");echo("<br>");
echo("affichages des nombres dans l'ordre croissant: ");
if ($nombreX>$nombreY AND $nombreY>$nombreZ) {
	echo($nombreX.', '.$nombreY.', '.$nombreZ);
}elseif ($nombreY>$nombreX AND $nombreX>$nombreZ) {
	echo($nombreY.', '.$nombreX.', '.$nombreZ);
}elseif ($nombreZ>$nombreX AND $nombreX>$nombreY) {
	echo($nombreZ.', '.$nombreX.', '.$nombreY);
}elseif ($nombreX>$nombreZ AND $nombreZ>$nombreY) {
	echo($nombreX.', '.$nombreZ.', '.$nombreY);
}elseif ($nombreY>$nombreZ AND $nombreZ>$nombreX) {
	echo($nombreY.', '.$nombreZ.', '.$nombreX);
}elseif ($nombreZ>$nombreY AND $nombreY>$nombreX) {
	echo($nombreZ.', '.$nombreY.', '.$nombreX);
}echo("<br>");echo("<br>");

echo("affichages des nombres dans l'ordre decroissant: ");
if ($nombreX<$nombreY AND $nombreY<$nombreZ) {
	echo($nombreX.', '.$nombreY.', '.$nombreZ);
}elseif ($nombreY<$nombreX AND $nombreX<$nombreZ) {
	echo($nombreY.', '.$nombreX.', '.$nombreZ);
}elseif ($nombreZ<$nombreX AND $nombreX<$nombreY) {
	echo($nombreZ.', '.$nombreX.', '.$nombreY);
}elseif ($nombreX<$nombreZ AND $nombreZ<$nombreY) {
	echo($nombreX.', '.$nombreZ.', '.$nombreY);
}elseif ($nombreY<$nombreZ AND $nombreZ<$nombreX) {
	echo($nombreY.', '.$nombreZ.', '.$nombreX);
}elseif ($nombreZ<$nombreY AND $nombreY<$nombreX) {
	echo($nombreZ.', '.$nombreY.', '.$nombreX);
}echo("<br>");echo("<br>");
?>
