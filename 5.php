<?php 

function buyNoodle($tanggal,$uang){

	$mie = $uang / 2500;
	$mie = number_format($mie);
	$bonusmie = 0;
	
	if ($tanggal % 2 == 0) {
		
		$genap = $mie / 4;
		$genap = number_format($genap);
		$bonusmie += $genap;

	}else{

		$ganjil = $mie / 3;
		$ganjil = number_format($ganjil);
		$bonusmie += $ganjil;
	}

	if ($tanggal % 5 == 0 ) {
		
		if ($bonusmie % 2 == 0) {
			$bonusmie = $bonusmie * 10;
		}else{
			$bonusmie = $bonusmie * 5;
		}

	}

 echo $mie + $bonusmie;
}


buyNoodle(25,100000);



 ?>