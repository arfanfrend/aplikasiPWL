<?php
include "koneksi.php";

$sql="SELECT COUNT(*) FROM datapegawai";
$rs =$con->prepare($sql);
$rs->execute();
$jmlh= $rs->fetchColumn();

$absen="SELECT COUNT(*) FROM dataabsen";
$rs =$con->prepare($absen);
$rs->execute();
$abs= $rs->fetchColumn();
?>
<div class="cards">
	<a href="javascript:;" onclick="pegawai()">
	<div class="card-single">
		<div>
	<h1><?= "$jmlh"; ?>	</h1>
	<span>Jumlah Pegawai</span>
	</div>
			<div>
				<span class="las la-users"></span>
			</div>
		</div>
		</a>
		<a href="javascript:;" onclick="tableabsen()">
		<div class="card-single">
			<div>
				<h1><?= "$abs"; ?></h1>
				<span>Jumlah Abesin</span>
			</div>
			<div>
				<span class="las la-clipboard"></span>
			</div>
		</div>
		</a>
	</div>



	 
	
	
			

				
				
			
                   
            
