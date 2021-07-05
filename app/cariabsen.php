
<?php
include "koneksi.php";
$cari = $_POST["cari"];
if($_GET["cari"] == "cari"){
	$select = $con->query("SELECT * FROM datapegawai 
	WHERE id LIKE '%$cari%'
	");

}

$data = $select->fetch(PDO::FETCH_ASSOC);

?>  
    <tr>
        <td>Nama Lengkap</td>
        <td>:</td>
        <td>
        <input type="hidden" name="nama" id="nama" value=" <?=$data["nama"];?>"/>
        <?=$data["nama"];?>
        </td>
    </tr>

    <tr>
        <td>Tanggal Lahir</td>
        <td>:</td>
        <td>
        <?=$data["tanggal"];?>
        </td>
    </tr>

    <tr>
        <td>Jenis Kelamin</td>
        <td>:</td>
        <td>
        <?=$data["jk"];?>
        </td>
    </tr>

    <tr>
        <td>No. Handphone</td>
        <td>:</td>
        <td>
        <?=$data["hp"];?>
        </td>
    </tr>

    <tr>
        <td>Alamat</td>
        <td>:</td>
        <td>
        <?=$data["hp"];?>
        </td>
    </tr>

    <tr>
        <td></td>
        <td></td>
        <td>
        
        </td>
    </tr>

    <tr>
        <td></td>
        <td></td>
        <td>
        <button type="submit" class="simpantambah" id="masukabsen">
        <span class="las la-save"></span>Masuk</button>
        <button type="button" class="keluartambah" id="keluarabsen">
        <span class="las la-times-circle"></span>keluar</button></td>
    </tr>
                                    
        
                                        
                                       
                                       
                                       
                                       