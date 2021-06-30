<?php
include "koneksi.php";

$sql="SELECT COUNT(*) FROM datapegawai";
$rs =$con->prepare($sql);
$rs->execute();
$jmlh= $rs->fetchColumn();
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
		<a href="">
		<div class="card-single">
			<div>
				<h1>90</h1>
				<span>Jumlah Abesin</span>
			</div>
			<div>
				<span class="las la-clipboard"></span>
			</div>
		</div>
		</a>
	</div>



	 
	
	
			

				
				
			
                   
            
