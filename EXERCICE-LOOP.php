<?php
$nbr=8 ;
$sommewithFor=0;
     $sommewithWhile=0;

for($i=1; $i<=$nbr ; $i++) {
    $sommewithFor += $i;
}
$j=1;
    while($j<=$nbr) {
        $sommewithWhile+= $j;
$j++ ;}

echo ( "somme with boucle for est ". $sommewithFor."  somme with boucle while est" . $sommewithWhile);
 ?>

