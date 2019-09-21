<?php 
require 'func.php';

///////////////////////////////////////////////////////////////////////////////////////////////////////

 if (hapus($_GET["id"] ) > 0) {
 	echo "	<script>
				alert('data berhasil dihapus');
				document.location.href = 'index.php';
			</script>
		";
		
 }else{
 	echo "
 			<script>
				alert('data GAGAL dihapus');
			</script>
 	";
 	echo mysqli_error($konek_database);
 }

 ?>