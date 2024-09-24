<!DOCTYPE html>
<html lang="en">
<?php include 'Part/Head.php';?>
<body>
	<div class="wrapper">
		<div class="main-header">
			<!-- Logo Header -->
			<div class="logo-header" data-background-color="blue">
				
				<a href="../index.html" class="logo">
					<img src="<?php echo base_url() . "assets/Homepage/"; ?>img/logo.svg" alt="navbar brand" class="navbar-brand">
				</a>
				<button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse" data-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon">
						<i class="icon-menu"></i>
					</span>
				</button>
				<button class="topbar-toggler more"><i class="icon-options-vertical"></i></button>
				<div class="nav-toggle">
					<button class="btn btn-toggle toggle-sidebar">
						<i class="icon-menu"></i>
					</button>
				</div>
			</div>
			<!-- End Logo Header -->

			<!-- Navbar Header -->
			<?php include 'Part/Navbar.php';?>
			<!-- End Navbar -->
		</div>
		<!-- Sidebar -->
		<?php include 'Part/Sidebar.php'?>;
		<div class="main-panel">
			<div class="content">
				<div class="page-inner">
					<div class="page-header">
						<h4 class="page-title">E-RAPOR</h4>
						<ul class="breadcrumbs">
							<li class="nav-home">
								<a href="#">
									<i class="flaticon-home"></i>
								</a>
							</li>
							<li class="separator">
								<i class="flaticon-right-arrow"></i>
							</li>
							<li class="nav-item">
								<a href="#">Data Biodata</a>
							</li>
							<li class="separator">
								<i class="flaticon-right-arrow"></i>
							</li>
							<li class="nav-item">
								<a href="#"><?php echo $table;?></a>
							</li>
						</ul>
					</div>
					<div class="row">

						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<div class="d-flex align-items-center">
										<h4 class="card-title"><?php echo $table;?></h4>
										<button class="btn btn-primary btn-round ml-auto" data-toggle="modal" data-target="#addRowModal">
											<i class="fa fa-plus"></i>
											Tambah Data
										</button>
									</div>
								</div>
								<div class="card-body">
									<!-- Modal -->
									<div class="modal fade" id="addRowModal" tabindex="-1" role="dialog" aria-hidden="true">
										<div class="modal-dialog modal-lg" role="document">
											<div class="modal-content">
												<div class="modal-header no-bd">
													<h5 class="modal-title">
														<strong>
															<span class="fw-mediumbold">
															Tambah</span> 
															<span class="fw-light">
																<?php echo $button;?>
															</span>
														</strong>
													</h5>
													<button type="button" class="close" data-dismiss="modal" aria-label="Close">
														<span aria-hidden="true">&times;</span>
													</button>
												</div>
												<div class="modal-body">
													<p class="small">Isikan semua data dengan benar.</p>
													<form action="<?php echo base_url('Homepage/Guru/add') ?>" method="POST">
														<span class="badge badge-primary mb-4">Data Guru</span>
														<div class="row">
															<div class="col-sm-6">
																<div class="form-group form-group-default">
																	<label>Nama Guru</label>
																	<input type="text" name="nama_guru" class="form-control" placeholder="Nama Lengkap" required="">
																</div>
															</div>
															<div class="col-sm-6">
																<div class="form-group form-group-default">
																	<label>Jenis Kelamin</label>
																	<select class="form-control" name="jenis_kelamin">
																		<option value=""> Pilih </option>
																		<option value="Laki-laki"> Laki-laki </option>
																		<option value="Perempuan"> Perempuan </option>
																	</select>
																</div>
															</div>
														</div>
														<div class="row">
															<div class="col-sm-6">
																<div class="form-group form-group-default">
																	<label>Tempat Lahir</label>
																	<input name="tempat_lahir" type="text" class="form-control" placeholder="Tempat Lahir" required="">
																</div>
															</div>
															<div class="col-sm-6">
																<div class="form-group form-group-default">
																	<label>Tanggal Lahir</label>
																	<input name="tanggal_lahir" type="date" class="form-control" placeholder="" required="">
																</div>
															</div>
														</div>
														<div class="row">
															<div class="col-sm-12">
																<div class="form-group form-group-default">
																	<label>Nomor Telp.</label>
																	<input name="telepon" type="text" class="form-control" placeholder="(Opsional)">
																</div>
															</div>
														</div>
														<div class="row">
															<div class="col-sm-12">
																<div class="form-group form-group-default">
																	<label>Alamat</label>
																	<textarea class="form-control" name="alamat" placeholder="Alamat Tinggal"></textarea>
																</div>
															</div>
														</div>
														<div class="row">
															<div class="col-sm-12">
																<div class="form-group form-group-default">
																	<label>Mata Pelajaran</label>
																	<select class="form-control" name="mapel" required="">
																		<option value=""> Pilih </option>
																		

																		<?php
																		$no = 0;
																		foreach ($data_mapel->result_array() as $row) :
																			$nama_mapel = $row['nama_mapel'];


																			?>
																			<option value="<?php echo $nama_mapel;?>"><?php echo $nama_mapel;?></option>
																		<?php endforeach;?>
																	</select>
																</div>
															</div>
														</div>
														<div class="row">
															<div class="col-sm-6">
																<div class="form-group form-group-default">
																	<label>Username</label>
																	<input name="username" type="text" class="form-control" placeholder="Username" autocomplete="off">
																</div>
															</div>
															<div class="col-sm-6">
																<div class="form-group form-group-default">
																	<label>Password</label>
																	<input name="password" type="password" class="form-control" placeholder="*****" autocomplete="off">
																</div>
															</div>
														</div>
														<div class="row">
															<div class="col-sm-12">
																<div class="form-group form-group-default">
																	<label>Hak Akses</label>
																	<select class="form-control" name="hak_akses" required="">
																		<option value=""> Pilih </option>
																		<option value="Guru"> Guru </option>
																		<option value="Walas"> Walas </option>
																		<option value="Kepsek"> Kepsek </option>
																		<option value="Kurikulumm"> Kurikulumm </option>
																	</select>
																</div>
															</div>
														</div>

													</div>
													<style type="text/css">
														.thick-hr {
															border: none;
															height: 5px; /* Anda dapat mengubah nilai ini untuk menyesuaikan ketebalan */
															background-color: black; /* Anda dapat mengubah warna ini sesuai keinginan */
														}
													</style>
													<hr class="thick-hr">
													<div class="modal-footer no-bd">
														<button type="submit" class="btn btn-primary">Add</button>
														<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
													</div>
												</form>
											</div>
										</div>
									</div>

									<div class="table-responsive">
										<table id="add-row" class="display table table-striped table-hover" >
											<thead>
												<tr>
													<th>No.</th>
													<th>Nama Guru</th>
													<th>Jenis Kelamin</th>
													<th>Mapel</th>
													<th style="width: 10%">Action</th>
												</tr>
											</thead>
											<tfoot>
												<tr>
													<th>No.</th>
													<th>Nama Guru</th>
													<th>Jenis Kelamin</th>
													<th>Mapel</th>
													<th style="width: 10%">Action</th>
												</tr>
											</tfoot>
											<tbody>
												<?php
												$no = 0;
												foreach ($data_guru->result_array() as $row) :

													$no++;
													$id_guru               = $row['id_guru'];
													$nama_guru           = $row['nama_guru'];
													$jenis_kelamin = $row['jenis_kelamin'];
													$mapel = $row['mapel'];

													?>
													<tr>
														<td><?php echo $no;?></td>
														<td><?php echo $nama_guru;?></td>
														<td><?php echo $jenis_kelamin;?></td>
														<td><?php echo $mapel;?></td>

														<td>
															<div class="form-button-action">
																<button type="button" data-toggle="modal" data-target="#edit<?php echo $id_guru;?>" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Task">
																	<i class="fa fa-edit"></i>
																</button>
																<button type="button" data-toggle="modal" data-target="#hapus<?php echo $id_guru;?>" title="" class="btn btn-link btn-danger" data-original-title="Hapus Data">
																	<i class="fa fa-times"></i>
																</button>
															</div>
															
														</td>
													</tr>
												<?php endforeach;?>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>


			<!-- edit -->
			<?php
			$no = 0;
			foreach ($data_guru->result_array() as $row) :

				$no++;
				$id_guru               = $row['id_guru'];
				$nama_guru	= $row['nama_guru'];
				$jenis_kelamin = $row['jenis_kelamin'];
				$tempat_lahir = $row['tempat_lahir'];
				$tanggal_lahir = $row['tanggal_lahir'];
				$telepon = $row['telepon'];

				$alamat = $row['alamat'];
				$mapel = $row['mapel'];
				$username = $row['username'];
				$hak_akses = $row['hak_akses'];

				?>
				<div class="modal fade" id="edit<?php echo $id_guru;?>" tabindex="-1" role="dialog" aria-hidden="true">
					<div class="modal-dialog modal-lg" role="document">
						<div class="modal-content">
							<div class="modal-header no-bd">
								<h5 class="modal-title">
									<strong>
										<span class="fw-mediumbold">
										Edit</span> 
										<span class="fw-light">
											<?php echo $button;?>
										</span>
									</strong>
								</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<p class="small">Isikan semua data dengan benar.</p>
								<form action="<?php echo base_url('Homepage/Guru/update') ?>" method="POST">
									<span class="badge badge-primary mb-4">Data Guru</span>
									<div class="row">
										<div class="col-sm-6">
											<div class="form-group form-group-default">
												<label>Nama Guru</label>
												<input type="text" name="nama_guru" class="form-control" placeholder="Nama Lengkap" value="<?php echo $nama_guru;?>">
												<input type="hidden" name="id_guru" value="<?php echo $id_guru;?>">
											</div>
										</div>
										<div class="col-sm-6">
											<div class="form-group form-group-default">
												<label>Jenis Kelamin</label>
												<select class="form-control" name="jenis_kelamin">
													<option value="<?php echo $jenis_kelamin;?>"> <?php echo $jenis_kelamin;?> </option>
													<option value="Laki-laki"> Laki-laki </option>
													<option value="Perempuan"> Perempuan </option>
												</select>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-6">
											<div class="form-group form-group-default">
												<label>Tempat Lahir</label>
												<input name="tempat_lahir" type="text" class="form-control" value="<?php echo $tempat_lahir;?>">
											</div>
										</div>
										<div class="col-sm-6">
											<div class="form-group form-group-default">
												<label>Tanggal Lahir</label>
												<input name="tanggal_lahir" type="date" class="form-control" placeholder="" required="" value="<?php echo $tanggal_lahir;?>">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-12">
											<div class="form-group form-group-default">
												<label>Nomor Telp.</label>
												<input name="telepon" type="text" class="form-control" placeholder="(Opsional)" value="<?php echo $telepon;?>">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-12">
											<div class="form-group form-group-default">
												<label>Alamat</label>
												<textarea class="form-control" name="alamat" placeholder="Alamat Tinggal"><?php echo $alamat;?></textarea>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-12">
											<div class="form-group form-group-default">
												<label>Mata Pelajaran</label>
												<select class="form-control" name="mapel" required="">
													<option value="<?php echo  $mapel;?>"> <?php echo  $mapel;?> </option>
													
													<?php
													$no = 0;
													foreach ($data_mapel->result_array() as $row) :
														$nama_mapel = $row['nama_mapel'];


														?>
														<option value="<?php echo $nama_mapel;?>"><?php echo $nama_mapel;?></option>
													<?php endforeach;?>
												</select>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-6">
											<div class="form-group form-group-default">
												<label>Username</label>
												<input name="username" type="text" class="form-control" value="<?php echo $username;?>">
											</div>
										</div>
										<div class="col-sm-6">
											<div class="form-group form-group-default">
												<label>Password</label>
												<input name="password" type="password" class="form-control" placeholder="*****" autocomplete="off">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-12">
											<div class="form-group form-group-default">
												<label>Hak Akses</label>
												<select class="form-control" name="hak_akses" required="">
													<option value="<?php echo  $hak_akses;?>"> <?php echo  $hak_akses;?> </option>
													<option value="Guru"> Guru </option>
													<option value="Walas"> Walas </option>
													<option value="Kepsek"> Kepsek </option>
													<option value="Kurikulumm"> Kurikulumm </option>
												</select>
											</div>
										</div>
									</div>

								</div>
								<style type="text/css">
									.thick-hr {
										border: none;
										height: 5px; /* Anda dapat mengubah nilai ini untuk menyesuaikan ketebalan */
										background-color: black; /* Anda dapat mengubah warna ini sesuai keinginan */
									}
								</style>
								<hr class="thick-hr">
								<div class="modal-footer no-bd">
									<button type="submit" class="btn btn-primary">Updata Data</button>
									<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			<?php endforeach;?>
			<!-- end edit -->

			<!-- hapus -->
			<?php
			$no = 0;
			foreach ($data_guru->result_array() as $row) :

				$no++;
				$id_guru               = $row['id_guru'];
				$nama_guru 			= $row['nama_guru'];
				?>
				<div class="modal fade" id="hapus<?php echo $id_guru;?>" tabindex="-1" role="dialog" aria-hidden="true">
					<div class="modal-dialog modal-lg" role="document">
						<div class="modal-content">
							<div class="modal-header no-bd">
								<h5 class="modal-title">
									<strong>
										<span class="fw-mediumbold">
										Hapus</span> 
										<span class="fw-light">
											<?php echo $button;?>
										</span>
									</strong>
								</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">

								<form action="<?php echo base_url('Homepage/Guru/delete') ?>" method="POST">
									<p>Apakah kamu yakin ingin menghapus data guru, <strong><?php echo $nama_guru;?> ?</strong></p>
									<input type="hidden" name="id_guru" value="<?php echo $id_guru;?>">
								</div>
								<style type="text/css">
									.thick-hr {
										border: none;
										height: 5px; /* Anda dapat mengubah nilai ini untuk menyesuaikan ketebalan */
										background-color: black; /* Anda dapat mengubah warna ini sesuai keinginan */
									}
								</style>
								<hr class="thick-hr">
								<div class="modal-footer no-bd">
									<button type="submit" class="btn btn-primary">Ya</button>
									<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			<?php endforeach;?>
			<!-- end hapus -->

			<?php include 'Part/Footer.php';?>
		</div>

		<!-- Custom template | don't include it in your project! -->
		<div class="custom-template">
			<div class="title">Settings</div>
			<div class="custom-content">
				<div class="switcher">
					<div class="switch-block">
						<h4>Logo Header</h4>
						<div class="btnSwitch">
							<button type="button" class="changeLogoHeaderColor" data-color="dark"></button>
							<button type="button" class="selected changeLogoHeaderColor" data-color="blue"></button>
							<button type="button" class="changeLogoHeaderColor" data-color="purple"></button>
							<button type="button" class="changeLogoHeaderColor" data-color="light-blue"></button>
							<button type="button" class="changeLogoHeaderColor" data-color="green"></button>
							<button type="button" class="changeLogoHeaderColor" data-color="orange"></button>
							<button type="button" class="changeLogoHeaderColor" data-color="red"></button>
							<button type="button" class="changeLogoHeaderColor" data-color="white"></button>
							<br/>
							<button type="button" class="changeLogoHeaderColor" data-color="dark2"></button>
							<button type="button" class="changeLogoHeaderColor" data-color="blue2"></button>
							<button type="button" class="changeLogoHeaderColor" data-color="purple2"></button>
							<button type="button" class="changeLogoHeaderColor" data-color="light-blue2"></button>
							<button type="button" class="changeLogoHeaderColor" data-color="green2"></button>
							<button type="button" class="changeLogoHeaderColor" data-color="orange2"></button>
							<button type="button" class="changeLogoHeaderColor" data-color="red2"></button>
						</div>
					</div>
					<div class="switch-block">
						<h4>Navbar Header</h4>
						<div class="btnSwitch">
							<button type="button" class="changeTopBarColor" data-color="dark"></button>
							<button type="button" class="changeTopBarColor" data-color="blue"></button>
							<button type="button" class="changeTopBarColor" data-color="purple"></button>
							<button type="button" class="changeTopBarColor" data-color="light-blue"></button>
							<button type="button" class="changeTopBarColor" data-color="green"></button>
							<button type="button" class="changeTopBarColor" data-color="orange"></button>
							<button type="button" class="changeTopBarColor" data-color="red"></button>
							<button type="button" class="changeTopBarColor" data-color="white"></button>
							<br/>
							<button type="button" class="changeTopBarColor" data-color="dark2"></button>
							<button type="button" class="selected changeTopBarColor" data-color="blue2"></button>
							<button type="button" class="changeTopBarColor" data-color="purple2"></button>
							<button type="button" class="changeTopBarColor" data-color="light-blue2"></button>
							<button type="button" class="changeTopBarColor" data-color="green2"></button>
							<button type="button" class="changeTopBarColor" data-color="orange2"></button>
							<button type="button" class="changeTopBarColor" data-color="red2"></button>
						</div>
					</div>
					<div class="switch-block">
						<h4>Sidebar</h4>
						<div class="btnSwitch">
							<button type="button" class="selected changeSideBarColor" data-color="white"></button>
							<button type="button" class="changeSideBarColor" data-color="dark"></button>
							<button type="button" class="changeSideBarColor" data-color="dark2"></button>
						</div>
					</div>
					<div class="switch-block">
						<h4>Background</h4>
						<div class="btnSwitch">
							<button type="button" class="changeBackgroundColor" data-color="bg2"></button>
							<button type="button" class="changeBackgroundColor selected" data-color="bg1"></button>
							<button type="button" class="changeBackgroundColor" data-color="bg3"></button>
							<button type="button" class="changeBackgroundColor" data-color="dark"></button>
						</div>
					</div>
				</div>
			</div>
			<div class="custom-toggle">
				<i class="flaticon-settings"></i>
			</div>
		</div>
		<!-- End Custom template -->
	</div>
	<?php include 'Part/Js.php';?>

</body>
</html>