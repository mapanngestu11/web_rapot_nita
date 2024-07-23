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
						<h4 class="page-title">E-RAPOT</h4>
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
										<h4 class="card-title">Informasi Data Pelajaran</h4>
									</div>
								</div>
								<div class="card-body">
									<table class="table">
										<tr>
											<td style="width: 15%">Mata Pelajaran</td>
											<td style="width: 2%">:</td>
											<td>Bahasa Indonesia</td>
										</tr>
										<tr>
											<td style="width: 15%">Kelas</td>
											<td style="width: 2%">:</td>
											<td>7</td>
										</tr>
										<tr>
											<td style="width: 15%">KKM</td>
											<td style="width: 2%">:</td>
											<td>70</td>
										</tr>
										<tr>
											<td style="width: 15%">Guru Pengampu</td>
											<td style="width: 2%">:</td>
											<td>Pak Budi</td>
										</tr>
										<tr>
											<td style="width: 15%">Tahun Pelajaran</td>
											<td style="width: 2%">:</td>
											<td>2024 / 2025</td>
										</tr>
									</table>
								</div>
							</div>
						</div>
						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<div class="d-flex align-items-center">
										<h4 class="card-title"><?php echo $table;?></h4>
										
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
													<th>Nama</th>
													<th>Total</th>

													<th style="width: 10%">Action</th>
												</tr>
											</thead>
											<tfoot>
												<tr>
													<th>No.</th>
													<th>Nis</th>
													<th>Nama</th>
													<th>Total</th>
													<th style="width: 10%">Action</th>
												</tr>
											</tfoot>
											<tbody>
												<?php
												$no = 0;
												foreach ($siswa->result_array() as $row) :

													$no++;
													$id_siswa               = $row['id_siswa'];
													$nis           = $row['nis'];
													$nama_siswa = $row['nama_siswa'];
													$total = '0';
													
													?>
													<tr>
														<td><?php echo $no;?></td>
														<td><?php echo $nis;?></td>
														<td><?php echo $nama_siswa;?></td>
														<td><?php echo $total;?></td>
														
														<td>
															<div class="form-button-action">
																<button type="button" data-toggle="modal" data-target="#edit<?php echo $id_siswa;?>" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Task">
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
			foreach ($siswa->result_array() as $row) :

				$no++;

				$id_siswa               = $row['id_siswa'];
				$nis           = $row['nis'];
				$nama_siswa = $row['nama_siswa'];

				?>
				<div class="modal fade" id="edit<?php echo $id_siswa;?>" tabindex="-1" role="dialog" aria-hidden="true">
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
								<form action="<?php echo base_url('Homepage/Nilai_pembelajaran/update') ?>" method="POST">
									<span class="badge badge-primary mb-4">Data Diri</span>
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
										<div class="col-sm-6">
											<div class="form-group form-group-default">
												<label>Nilai Pengetahuan</label>
												<input type="text" name="nilai_pengetahuan" class="form-control">
											</div>
										</div>
										<div class="col-sm-6">
											<div class="form-group form-group-default">
												<label>Nilai Keterampilan</label>
												<input type="text" name="nilai_pengetahuan" class="form-control">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-6">
											<div class="form-group form-group-default">
												<label>Nilai PTS</label>
												<input type="text" name="nilai_pts" class="form-control">
											</div>
										</div>
										<div class="col-sm-6">
											<div class="form-group form-group-default">
												<label>Nilai PAS</label>
												<input type="text" name="nilai_pas" class="form-control">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-12">
											<div class="form-group form-group-default">
												<label>Deskripsi</label>
												<textarea class="form-control" name="deskripsi"></textarea>
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