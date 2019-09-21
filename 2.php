<?php 

function username($username){

	if (preg_match("/[A-Z]/", $username) || preg_match("/[1-9]/", $username) || preg_match("/\W/", $username) ) {
		echo "karakter harus berupa huruf kecil ,tanpa angka dan tanpa karakter spesial";
		return false; exit;
	}

	if (!strlen($username) < 10 || !strlen($username) > 4 ) {
		echo "minimal 5 sampai 9 karakter";
		return false; exit;
	}
return true;
}


function password($pass){

	if (!preg_match("/[a-z]/", $pass ) || !preg_match("/[A-Z]/", $pass ) || !preg_match("/[1-9]/", $pass ) ||
		preg_match("/\W/", $pass) ){

		echo "kombinasi antara huruf kecil,besar dan angka";
		return false; exit;
	}

	$pp = strlen($pass);
	if ($pp != 10 ){
		echo "panjang krakter harus 10";
		return false; exit;
	}
return true;
}

?>