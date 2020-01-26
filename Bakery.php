<?php

function calc($packs)
{
	$xyz=21;
	$s=0;
	$m=0;
	$l=0;

	while ($xyz % $packs[1] >= 1  && $xyz % $packs[2] >= 1) {
		$xyz=$xyz-$packs[0];
		$s++;
	}

	while ($xyz % $packs[2] >= 1) {
		$xyz=$xyz-$packs[1];
		$m++;
	}

	$l=$xyz / $packs[2];
$total=$l * 24.95 + $m * 16.95 + $s * 9.95;

	echo $xyz + $m*$packs[1] + $s*$packs[0] . " " . 'MB11' ." ". "$" . $total;
	echo "</br>";
	echo "&nbsp;&nbsp;&nbsp;&nbsp" . "$l x " .$packs[2]. "$24.95 </br>";
	echo "&nbsp;&nbsp;&nbsp;&nbsp" . "$m x " .$packs[1]. "$16.95 </br>";
	echo "&nbsp;&nbsp;&nbsp;&nbsp" . "$s x " .$packs[0]. "$9.95</br></br>";
	
}
//Vegemite Scroll

//Blueberry Muffin
$packs = array(2, 5, 8);
calc($packs);
//Croissant
$packs = array(3, 5, 9);
calc($packs);

/*
1.prices
2.roll vegat
3.different numbers of sets
4.git
*/
?>

