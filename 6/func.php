<?php  
$conn = mysqli_connect("localhost","root","","arkademy");

function query($query){

	global $conn;
	$result = mysqli_query($conn, $query);
	$rows = [];
	while ( $row = mysqli_fetch_assoc($result) ) {
		$rows[] = $row;
	}
	return $rows;
}

function hapus($hapus){
	global $conn;

	$query_hapus1 = "DELETE FROM name WHERE id = $hapus ";
	$query_hapus2 = "DELETE FROM work WHERE id = $hapus ";
	$query_hapus3 = "DELETE FROM salary WHERE id = $hapus ";

	mysqli_query($conn,$query_hapus1);
	mysqli_query($conn,$query_hapus2);
	mysqli_query($conn,$query_hapus3);

	return mysqli_affected_rows($conn);
}

function edit($edit){

	global $conn;

	$id = $edit["id"];
	$name = htmlspecialchars($edit["name"] );
	$salary =  htmlspecialchars($edit["salary"] );
	$work = htmlspecialchars($edit["work"] );

	$ngequery1 = "UPDATE name SET name = '$name' WHERE id = $id";
	$ngequery2 = "UPDATE salary SET salary = '$salary' WHERE id = $id";
	$ngequery3 = "UPDATE work SET name = '$work' WHERE id = $id";


	mysqli_query($conn,$ngequery1);
	mysqli_query($conn,$ngequery2);
	mysqli_query($conn,$ngequery3);
	/////////////////////////////////////////////////////////

	return mysqli_affected_rows($conn);
}


function tambah($tambah){
	global $conn;

	$name = htmlspecialchars($tambah["name"] );
	$work = htmlspecialchars($tambah["work"] );
	$salary = htmlspecialchars($tambah["salary"] );

	$ngequery1 = "INSERT INTO name VALUES ('','$name','','' )";
	$ngequery2 = "INSERT INTO work VALUES ('','$work','')";
	$ngequery3 = "INSERT INTO salary VALUES ('','$salary')";
	mysqli_query($conn,$ngequery1);
	mysqli_query($conn,$ngequery2);
	mysqli_query($conn,$ngequery3);
	/////////////////////////////////////////////////////////

	return mysqli_affected_rows($conn);
}
















?>

