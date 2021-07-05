
<div class="recent-table">
			<div class="projects">

				<div class="card">
					
					<div class="card-header">
							
						<h3>Data Absen</h3>
						
						<button class="tambahabsen"> <span class=" las la-arrow-right"></span> Tambah Absen 
						</button>
					</div>
					<div class="search-table">
					<span class="las la-search"></span>
					<input type="text" name="absen" id="absen" placeholder="search here" />
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
										<td>Jam Masuk</td>
										<td>Tanggal</td>
										<td>Action</td>
									</tr>
								</thead>
								<tbody id="out">
									<?php
									include "koneksi.php";
									$select = $con->query("SELECT * FROM dataabsen");
									$no =1;
									if($select->rowCount() > 0 ) {
									while ($data = $select->fetch(PDO::FETCH_ASSOC)) {	
								
								?>
								<tr>
										<td><?=$no++;?></td>
										<td><?=$data['id'];?></td>
										<td><?=$data['nama'];?></td>
										<td><?=$data['jam'];?></td>
										<td><?=$data['tanggal'];?></td>
										
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
		
													
											
											
							
