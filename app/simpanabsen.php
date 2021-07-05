<?php

include "koneksi.php";

$id = $_POST["id"];
$nama = $_POST["nama"];
$jam =$_POST["jam"];
$tanggal = $_POST["tanggal"];



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
    exit;


}
?>