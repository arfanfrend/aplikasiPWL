<?php
 include "koneksi.php";
 date_default_timezone_set("Asia/Jakarta");
 $date = date("H:i:s");
 $kalender = date("l, d F Y");

$id = $_POST["caripegawai"];
$nama = $_POST["nama"];
$jam =$_POST["jam"];
$tanggal = $_POST["tang"];

if($_GET["sub"] == "absen"){
    $stmt = $con->prepare("INSERT INTO dataabsen (id, nama, jam, tanggal) VALUES (?, ?, ?, ?)");
    $stmt->bindParam(1,$id);
    $stmt->bindParam(2,$nama);
    $stmt->bindParam(3,$jam);
    $stmt->bindParam(4,$tanggal);
    $stmt->execute();
    if($stmt->rowCount() > 0 ) {
        echo "sukses";

    } else {
        echo "gagal";
    }

}

?>        

<div class="recent-table">
	<div class="projects">
        <div class="card">
			<div class="card-header">
            <h3>Absen Pegawai</h3>
            <h5>
            <span> Jam : 
            <input type="hidden" name="jam" id="jam" value="<?=$date?>"/>
            <?= $date?></span>&nbsp;&nbsp;|&nbsp;
            <span>Tanggal : 
            <input type="hidden" name="tanggal" id="tanggal" value="<?=$kalender?>"/>
            <?= $kalender ?></h5></span>
            </div>
			    <div class="search-table">
					<span class="las la-search"></span>
					<input type="text" name="caripegawai" id="caripegawai" placeholder="Cari Berdasarkan ID Pegawai" />
				</div>
					<div class="card-body">
						<div class="table-responsive">
                            <form action="" method="post" id="from-absen">
                                <table id="cari-absen">
                               </table>
                           </form>
			            </div>
		            </div>
	</div>
</div>

     

