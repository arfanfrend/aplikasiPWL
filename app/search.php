
<?php
include "koneksi.php";
$search = $_POST["search"];
if($_GET["search"] == "search"){
	$select = $con->query("SELECT * FROM datapegawai 
	WHERE id LIKE '%$search%' OR
	nama LIKE '%$search%' OR
	tanggal LIKE '%$search%' 
	");

} else {
	$select = $con->query("SELECT * FROM datapegawai");
}
$no =1;
if($select->rowCount() > 0 ) {
while ($data = $select->fetch(PDO::FETCH_ASSOC)) {	

?>
<tr>
	<td><?=$no++;?></td>
	<td><?=$data['id'];?></td>
	<td><?=$data['nama'];?></td>
	<td><?=$data['tanggal'];?></td>
	<td><?=$data['jk'];?></td>
	<td><?=$data['hp'];?></td>
	<td><?=$data['alamat'];?></td>
<td>


	<button class="edit" value="<?=$data["id"];?>">Edit</button>
	<button id="hapus" class="hapus" value="<?=$data["id"];?>">Hapus</button>
	</tr>
<?php

}	
}

	
?>		
	

									
									
										
										
										
									
										
										
										
										

									
									
								
								
																