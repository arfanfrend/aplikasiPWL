<?php

include "koneksi.php";

    $id = $_POST["id"];
    $nama = $_POST["nama"];
    $tanggal = $_POST["tanggal"];
    $jk = $_POST["jk"];
    $hp = $_POST["hp"];
    $alamat = $_POST["alamat"];


if($_GET["sub"] == "tambah"){
    $stmt = $con->prepare("INSERT INTO datapegawai (id, nama, tanggal, jk, hp, alamat) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bindParam(1,$id);
    $stmt->bindParam(2,$nama);
    $stmt->bindParam(3,$tanggal);
    $stmt->bindParam(4,$jk);
    $stmt->bindParam(5,$hp);
    $stmt->bindParam(6,$alamat);
    $stmt->execute();
    if($stmt->rowCount() > 0 ) {
		echo "sukses";

    } else {
        echo "gagal";
    }
    exit;


} else if($_GET["sub"] == "edit"){
    $stmt = $con->prepare("UPDATE datapegawai SET nama = :nama, tanggal = :tanggal, jk = :jk, hp=:hp, alamat=:alamat WHERE id =:id ");
    $stmt->bindParam(":nama",$nama);
    $stmt->bindParam(":tanggal",$tanggal);
    $stmt->bindParam(":jk",$jk);
    $stmt->bindParam(":hp",$hp);
    $stmt->bindParam(":alamat",$alamat);
    $stmt->bindParam(":id",$id);
    $stmt->execute();
    if($stmt->rowCount() > 0 ) {
		echo "sukses";

    } else {
        echo "gagal";
    }
    exit;

} else if($_POST["sub"] == "hapus"){
    
    $stmt = $con->prepare("DELETE FROM datapegawai WHERE id =?");
    $stmt->bindParam(1,$id);
    $stmt->execute();
    if($stmt->rowCount() > 0 ) {
		echo "sukses";

    } else {
        echo "gagal";
    }
    exit;

 }

										
										
										
										
										

									
									
