<?php 
require 'func.php';
///////////////////////////////////////////////////////////////////////////////////////////////////////
$id = $_GET["id"];
$edit0 = query("SELECT id FROM name WHERE id = $id ");
$edit1 = query("SELECT name FROM name WHERE id = $id ");
$edit2 = query("SELECT name FROM work WHERE id = $id ");
$edit3 = query("SELECT salary FROM salary WHERE id = $id");

$edit["id"] = $edit0[0]["id"];
$edit["name"] = $edit1[0]["name"];
$edit["work"] = $edit2[0]["name"];
$edit["salary"] = $edit3[0]["salary"];


if (isset($_POST["submit"]) ) {



	if (edit($_POST) > 0 ) {
		echo "
			<script>
				alert('data berhasil diedit');
				document.location.href = 'index.php';
			</script>
		";
	}else{
		echo mysqli_error($conn);
		echo "
			<script>
				document.location.href = 'index.php';
			</script>
		";
	}

	 
}





?>



<!DOCTYPE html>
<html>
<head>
	<title>Halaman tambah</title>
</head> 
<body>
<h1>Tambah Data</h1>

<form action="" method="post" enctype="multipart/form-data">
	<ul>
		<input type="hidden" name="id" value="<?= $edit["id"]; ?>">
		<li>
			<label for="name"> name :</label>
			<input type="text" name="name" id="name" required value="<?= $edit["name"]; ?>">
		</li>
		<li>
			<label for="work"> work :</label>
			<input type="text" name="work" id="work" required value="<?= $edit["work"]; ?>">
		</li>	
		<li>
			<label for="salary"> salary :</label>
			<input type="text" name="salary" id="salary" required value="<?= $edit["salary"]; ?>">
		</li>
		<li>
			<button type="submit" name="submit">EDIT DATA</button>
		</li>
	</ul>

</form>


<br><br>
<a href="index.php">kembali</a>
</body>
</html>
