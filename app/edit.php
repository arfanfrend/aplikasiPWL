<?php
 include "koneksi.php";
 $id=$_GET['id'];
 $query=$con->query("SELECT * FROM datapegawai WHERE id='$id'");
 $data=$query->fetch(PDO::FETCH_ASSOC);

?>        
        <div class="recent-form" id="edit">
            <div class="content">
                <div class="card">
                    <div class="card-header" id="edit">
                        <h3 class="header">Edit Data Pegawai</h3>
                        </div>
                            <div class="card-body">
                                
                                <div class="table-responsive">
                                    <div class="form-ac">
                                    <form action="" method="get" id="fromedit" enctype="multipart/form-data">
                                   
                                    <table>

                                    <tr>
                                        <td>ID Pegawai</td>
                                        <td>:</td>
                                        <td>
                                            <input type="text" name="id" id="id" value="<?=$data["id"];?>"/>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>Nama Lengkap</td>
                                        <td>:</td>
                                        <td>
                                            <input type="text" name="nama" id="nama" value="<?=$data["nama"];?>"/>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>Tanggal Lahir</td>
                                        <td>:</td>
                                        <td>
                                            <input type="date" name="tanggal" id="tanggal" value="<?=$data["tanggal"];?>"/>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>Jenis Kelamin</td>
                                        <td>:</td>
                                        <td>
                                            <select name="jk" id="jk">
                                            <option value="">- Pilih -</option>
                                            <option value="laki-laki"
                                            <?php
                                            if($data["jk"] == "laki-laki"){
                                                echo "selected";
                                            }
                                            ?>
                                            >Laki-Laki</option>
                                            <option value="perempuan"
                                            <?php
                                            if($data["jk"] == "perempuan"){
                                                echo "selected";
                                            }
                                            ?>
                                            
                                            >Perempuan</option>
                                        </select>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>No. Handphone</td>
                                        <td>:</td>
                                        <td>
                                            <input type="text" name="hp" id="hp" value="<?=$data["hp"];?>"/>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>Alamat</td>
                                        <td>:</td>
                                        <td>
                                            <textarea nama="alamat" id="alamat"><?=$data["alamat"];?></textarea>
                                        </td>
                                    </tr>


                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td>
                                        <button type="submit" class="ubah">
                                        <span class="las la-pen-square"></span>Ubah</button>
                                        <button type="submit" class="simpantambah" id="simpanpegawai">
                                        <span class="las la-save"></span>Simpan</button>
                                        <button type="button" class="keluartambah">
                                        <span class="las la-times-circle"></span>keluar</button></td>
                                    </tr>
                                </table>
                            </form>
                            <!-- <div class="upload">
                            <span>
                                <img id="uploaded_image" src="<?=$location?>" alt="">
                                    <input type="file" name="file" id="file">
                                </span>
                                </div> -->
                            </div>          
                        </div>
                    </div>
                </div>
            </div>
        </div>

     

