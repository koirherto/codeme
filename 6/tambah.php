<?php 
require 'func.php';

///////////////////////////////////////////////////////////////////////////////////////////////////////

if (isset($_POST["submit"]) ) {


	if (tambah($_POST) > 0 ) {
		echo "
			<script>
				alert('data berhasil ditambahkan');
				document.location.href = 'index.php';
			</script>
		";
	}else{
		echo "
			<script>
				alert('data gagal ditambahkan');
			</script>
		";
		echo mysqli_error($conn);
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
		<li>
			<label for="name"> Name :</label>
			<input type="text" name="name" id="name" required>.
		</li>
		<li>
			<label for="work"> Work :</label>
			<input type="text" name="work" id="work" required>.
		</li>	
		<li>
			<label for="salary"> Salary :</label>
			<input type="text" name="salary" id="salary" required>.
		</li>
			<button type="submit" name="submit">TAMBAH DATA</button>
		</li>
	</ul>

</form>


<br><br>
<a href="index.php">kembali</a>
</body>
</html>