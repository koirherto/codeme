<?php


function count_handshake($orang){
	
	$satu = 1;
	$jb = 0;
	for ($p=0; $p < $orang - 1; $p++) {

		$jb += $satu++;

	}
	echo "$jb";

}

count_handshake(4);












?>