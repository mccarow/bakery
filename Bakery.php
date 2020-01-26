<?php
function calc($packs, $prices, $xyz)
{
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
$total=$l * $prices[2] + $m * $prices[1] + $s * $prices[0];

	echo $xyz + $m*$packs[1] + $s*$packs[0] . " " . 'MB11' ." ". "$" . $total;
	echo "</br>";
	if ($l>0) {
	  echo "&nbsp;&nbsp;&nbsp;&nbsp" . $l . " x " . $packs[2]. " " . $prices[2] . "</br>";
	}
	if ($m>0) {
		echo "&nbsp;&nbsp;&nbsp;&nbsp" . $m . " x " . $packs[1]. " " . $prices[1] . "</br>";
	}
	if ($s>0) {
		echo "&nbsp;&nbsp;&nbsp;&nbsp" . $s . " x " . $packs[0]. " " . $prices[0] . "</br></br>";
	}
}
//Vegemite Scroll

//Blueberry Muffin
$xyz=15;
$packs = array(2, 5, 8);
$prices = array(9.95, 16.95, 24.95);
calc($packs, $prices,$xyz);
//Croissant
$xyz=21;
$packs = array(3, 5, 9);
$prices = array(5.95, 9.95, 16.99);
calc($packs, $prices,$xyz);

/*
1.prices
2.roll vegat
3.different numbers of sets
4.git
*/
?>

