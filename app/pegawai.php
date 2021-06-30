
<div class="recent-table">
			<div class="projects">

				<div class="card">
					
					<div class="card-header">
							
						<h3>Data Pegawai</h3>
						
						<button class="tambah"> <span class=" las la-arrow-right"></span> Tambah Data 
						</button>
					</div>
					<div class="search-table">
					<span class="las la-search"></span>
					<input type="text" name="search" id="search" placeholder="search here" />
					</div>
						<div class="card-body">
							<div class="table-responsive">
							<form action="" method="post" id="hps" class="in">
								<table width="100%">
								<thead>
									<tr>
										<td>#</td>
										<td>Id Pegawai</td>
										<td>Nama Lengkap</td>
										<td>Tanggal Lahir</td>
										<td>Jenis Kelamin</td>
										<td>No. Handphone</td>
										<td>Alamat</td>
										<td>Action</td>
									</tr>
								</thead>
								<tbody id="out">
									<?php
									include "koneksi.php";
									$select = $con->query("SELECT * FROM datapegawai");
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
									
										<button class="edit" value="<?=$data["id"];?>">
										<span class="las la-edit"></span>Edit</button>
										
										<button id="hapus" class="hapus" value="<?=$data["id"];?>">
										<span class="las la-trash-alt"></span>Hapus</button>
										
									</tr>

									<?php
										}	
									}
									
									?>						
								</tbody>
							</table>
						</form>
						</div>
					</div>
				
			</div>

</div>
		
													
											
											
							
