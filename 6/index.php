<?php 
require 'func.php';
$ark = query("SELECT name.name, salary.salary FROM name INNER JOIN salary ON name.id = salary.id") ;
$ark2 = query("SELECT work.name, salary.id FROM work INNER JOIN salary ON work.id = salary.id") ;

$nol = 0;
foreach ($ark as $a) {
	$ark[$nol]["work"] = $ark2[$nol]["name"];
    $ark[$nol]["id"] = $ark2[$nol]["id"];

	$nol++;
}

?>


<!DOCTYPE html>
<html>
<head>
	<title>Tes Arkademy</title>
</head>
<body>

    <a href="tambah.php">TAMBAH DATA</a>
	<table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>Name</th>
            <th>Work</th>
            <th>Salary</th>
            <th>Action</th>
        </tr>

    <?php foreach ($ark as $tampil) : ?>

        <tr>
            <td> <?= $tampil["name"]; ?> </td>
            <td> <?= $tampil["work"]; ?></td>
            <td> <?= $tampil["salary"]; ?></td>
            <td> <a href="hapus.php?id=<?=$tampil["id"];?>" onclick="return confirm('yakin dihapus?')"; > hapus </a> ||   <a href="edit.php?id=<?=$tampil["id"];?>">Ubah </a>
            </td>`
        </tr>


    <?php endforeach?>
    </table>
</body>

</html>