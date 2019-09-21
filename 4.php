<?php

function fibo($panjang,$lebar){
	

	$sebelum = 0;
	$sesudah = 1;
	$angka[] = "$sebelum ";
	$angka[] = "$sesudah ";
	$jmlangka = $panjang * $lebar;

	for ($q=0; $q < $jmlangka ; $q++) { 
		
		$a = $sebelum + $sesudah;
		$angka[] = "$a ";
		$sebelum = $sesudah;
		$sesudah = $a;
	}

	$nol = 0;
	for ($w=0; $w < $lebar; $w++) { 

		$str = "";
		for ($e=0; $e < $panjang; $e++) { 

			$str .= $angka[$nol];
			$nol++;
		}

		echo "$str" . "<br>";
		
	}

}


?>