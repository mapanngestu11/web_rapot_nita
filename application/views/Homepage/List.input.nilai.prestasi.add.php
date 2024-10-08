<!DOCTYPE html>
<html lang="en">
<?php include 'Part/Head.php';?>
<body>
	<div class="wrapper">
		<div class="main-header">
			<!-- Logo Header -->
			<div class="logo-header" data-background-color="blue">
				
				<style type="text/css">
					.navbar-brand{
						width: 30px;
					}
					.text-logo{
						color: white !important;
						font-size: 12px;
						margin-top: -37px;
						font-weight: bold;
						margin-left: 37px;
					}
				</style>

				
				<a href="index.html" class="logo">
					<img src="<?php echo base_url() . "assets/login/"; ?>images/logo.png" alt="navbar brand" class="navbar-brand"><p class="text-logo">SMK BANI USMAN</p>
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
										<h4 class="card-title"><?php echo $table;?><br>
											<hr>
											<?php
											$mapel = $this->session->userdata('mapel');
											$nama_guru = $this->session->userdata('nama_guru');
											?>
											<table>
												<tr>
													<td>Nama Guru</td>
													<td>:</td>
													<td><?php  echo $nama_guru;?></td>
												</tr>
												<tr>
													<td>Mata Pelajaran</td>
													<td>:</td>
													<td><?php  echo $mapel;?></td>
												</tr>
											</table>
										</h4>
										<hr>

									</div>
								</div>
								<div class="card-body">
									<!-- Modal -->


									<div class="table-responsive">
										<table id="add-row" class="display table table-striped table-hover" >
											<thead>
												<tr>
													<th>No.</th>
													<th>Nis</th>
													<th>Nama Siswa</th>
													<th>Kelas</th>
													
													
													<th style="width: 10%">Action</th>
												</tr>
											</thead>
											<tfoot>
												<tr>
													<th>No.</th>
													<th>Nis</th>
													<th>Nama Siswa</th>
													<th>Kelas</th>

													
													<th style="width: 10%">Action</th>
												</tr>
											</tfoot>
											<tbody>
												<?php
												$no = 0;
												foreach ($data_kelas->result_array() as $row) :

													$no++;
													
													$nis           = $row['nis'];
													$nama_siswa = $row['nama_siswa'];
													$kelas = $row['kelas'];
													

													
													?>
													<tr>
														<td><?php echo $no;?></td>
														<td><?php echo $nis;?></td>
														<td><?php echo $nama_siswa;?></td>
														<td><?php echo $kelas;?></td>
														

														<td>
															<div class="form-button-action">
																<button type="button" data-toggle="modal" data-target="#info<?php echo $nis;?>" title="" class="btn btn-link btn-warning btn-lg" data-original-title="Edit Task">
																	<i class="fa fa-file"></i>
																</button>
																<button type="button" data-toggle="modal" data-target="#edit<?php echo $nis;?>" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Task">
																	<i class="fa fa-edit"></i>
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
			foreach ($data_kelas->result_array() as $row) :

				$no++;
				$nis               = $row['nis'];
				$nama_siswa = $row['nama_siswa'];
				$kelas           = $row['kelas'];
				$jenis_prestasi         = $row['jenis_prestasi'];
				$keterangan = $row['keterangan'];


				

				?>
				<div class="modal fade" id="edit<?php echo $nis;?>" tabindex="-1" role="dialog" aria-hidden="true">
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
								<form action="<?php echo base_url('Homepage/Prestasi/update') ?>" method="POST">
									<span class="badge badge-primary mb-4">Data Nilai</span>
									<div class="row">
										<div class="col-sm-6">
											<div class="form-group form-group-default">
												<label>Nis</label>
												<input type="text" name="nis" class="form-control" value="<?php echo $nis;?>" readonly>
											</div>
										</div>
										<div class="col-sm-6">
											<div class="form-group form-group-default">
												<label>Nama Siswa</label>
												<input type="text" name="nama_siswa" class="form-control" value="<?php echo $nama_siswa;?>" readonly>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-12">
											<div class="form-group form-group-default">
												<label>Jenis Prestasi</label>
												<input type="text" name="jenis_prestasi" class="form-control">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-12">
											<div class="form-group form-group-default">
												<label>Keterangan</label>
												<input type="text" name="keterangan" class="form-control">
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
			<?php endforeach;?>
			<!-- end edit -->

			
			<!-- edit -->
			<?php
			$no = 0;
			foreach ($data_kelas->result_array() as $row) :

				$no++;
				$nis               = $row['nis'];
				$nama_siswa = $row['nama_siswa'];
				$kelas           = $row['kelas'];
				$jenis_prestasi = $row['jenis_prestasi'];
				$keterangan = $row['keterangan'];

				

				?>
				<div class="modal fade" id="info<?php echo $nis;?>" tabindex="-1" role="dialog" aria-hidden="true">
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
								<form action="<?php echo base_url('Homepage/Nilai_sosial/update') ?>" method="POST">
									<span class="badge badge-primary mb-4">Data Nilai</span>
									<div class="row">
										<div class="col-sm-6">
											<div class="form-group form-group-default">
												<label>Nis</label>
												<input type="text" name="nis" class="form-control" value="<?php echo $nis;?>" readonly>
											</div>
										</div>
										<div class="col-sm-6">
											<div class="form-group form-group-default">
												<label>Nama Siswa</label>
												<input type="text" name="nama_siswa" class="form-control" value="<?php echo $nama_siswa;?>" readonly>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-12">
											<div class="form-group form-group-default">
												<label>Jenis Prestasi</label>
												<input type="text" name="jenis_prestasi" class="form-control" value="<?php echo $jenis_prestasi;?>">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-12">
											<div class="form-group form-group-default">
												<label>Keterangan</label>
												<input type="text" name="keterangan" class="form-control" value="<?php echo $keterangan;?>">
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
									<!-- <button type="submit" class="btn btn-primary">Add</button> -->
									<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			<?php endforeach;?>
			<!-- end edit -->

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