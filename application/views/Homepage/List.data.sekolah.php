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
										<h4 class="card-title"><?php echo $table;?></h4>
										
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
													<form action="<?php echo base_url('Homepage/Siswa/add') ?>" method="POST">
														<span class="badge badge-primary mb-4">Data Diri</span>
														<div class="row">
															<div class="col-sm-6">
																<div class="form-group form-group-default">
																	<label>Nis</label>
																	<input type="text" name="nis" class="form-control" placeholder="Nis" required="">
																</div>
															</div>
															<div class="col-sm-6">
																<div class="form-group form-group-default">
																	<label>Nisn</label>
																	<input name="nisn" type="text" class="form-control" placeholder="Nisn" required="">
																</div>
															</div>
														</div>
														<div class="row">
															<div class="col-sm-12">
																<div class="form-group form-group-default">
																	<label>Nama Siswa</label>
																	<input name="nama_siswa" type="text" class="form-control" placeholder="Nama Siswa" required="">
																</div>
															</div>
														</div>
														<div class="row">
															<div class="col-sm-6">
																<div class="form-group form-group-default">
																	<label>Kelas</label>
																	<select class="form-control" name="kelas" required="">
																		<option value=""> Pilih </option>
																		<option value="1"> 1 </option>
																	</select>
																</div>
															</div>
															<div class="col-sm-6">
																<div class="form-group form-group-default">
																	<label>Jenis Kelamin</label>
																	<select class="form-control" name="jenis_kelamin" required="">
																		<option value=""> Pilih </option>
																		<option value="Laki - Laki"> Laki - Laki</option>
																		<option value="Perempuan"> Perempuan </option>
																	</select>
																</div>
															</div>
														</div>
														<div class="row">
															<div class="col-sm-12">
																<div class="form-group form-group-default">
																	<label>Jenis Pendaftaran</label>
																	<select class="form-control" name="jenis_pendaftaran" required="">
																		<option value=""> Pilih </option>
																		<option value="Siswa Baru"> Siswa Baru </option>
																		<option value="Siswa Pindahan"> Siswa Pindahan </option>
																	</select>
																</div>
															</div>
														</div>
														<div class="row">
															<div class="col-sm-12">
																<div class="form-group form-group-default">
																	<label>Penerimaan Data</label>
																	<input type="date" name="penerimaan_data" class="form-control" required="">
																</div>
															</div>
														</div>
														<div class="row">
															<div class="col-sm-6">
																<div class="form-group form-group-default">
																	<label>Tempat Lahir</label>
																	<input type="text" name="tempat_lahir" class="form-control" placeholder="Tempat Lahir" required ="">
																</div>
															</div>
															<div class="col-sm-6">
																<div class="form-group form-group-default">
																	<label>Tanggal Lahir</label>
																	<input type="date" name="tanggal_lahir" class="form-control" required="">
																</div>
															</div>
														</div>
														<div class="row">
															<div class="col-sm-12">
																<div class="form-group form-group-default">
																	<label>Agama</label>
																	<select class="form-control" name="agama" required="">
																		<option value=""> Pilih </option>
																		<option value="Islam"> Islam </option>
																		<option value="Protestan"> Protestan </option>
																		<option value="Katolik"> Katolik </option>
																		<option value="Hindu"> Hindu </option>
																		<option value="Buddha"> Buddha </option>
																	</select>
																</div>
															</div>
														</div>
														<div class="row">
															<div class="col-sm-6">
																<div class="form-group form-group-default">
																	<label>Alamat</label>
																	<textarea class="form-control" name="alamat" rows="3"></textarea>
																</div>
															</div>
															<div class="row">
																<div class="col-sm-6">
																	<div class="form-group form-group-default">
																		<label>Nomor Telp.</label>
																		<input type="text" name="telepon" class="form-control" required="" placeholder="Nomor Telp.">
																	</div>
																</div>
																<div class="col-sm-6">
																	<div class="form-group form-group-default">
																		<label>Anak Ke-</label>
																		<input type="text" name="anak_ke" class="form-control" required="" placeholder="Anak Ke-">
																	</div>
																</div>
															</div>
															<div class="col-sm-12">
																<div class="form-group form-group-default">
																	<label>Status dalam keluarga</label>
																	<select class="form-control" name="status_keluarga">
																		<option value=""> Pilih </option>
																		<option value="Anak Kandung"> Anak Kandung </option>
																		<option value="Anak Angkat"> Anak Angkat </option>
																		<option value="Anak Tiri"> Anak Tiri </option>
																	</select>
																</div>
															</div>
														</div>
														<span class="badge badge-primary mb-4">Data Keluarga</span>
														<div class="row">
															<div class="col-sm-6">
																<div class="form-group form-group-default">
																	<label>Nama Ayah</label>
																	<input type="text" name="nama_ayah" class="form-control" required="" placeholder="Nama Ayah">
																</div>
															</div>
															<div class="col-sm-6">
																<div class="form-group form-group-default">
																	<label>Nama Ibu</label>
																	<input type="text" name="nama_ibu" class="form-control" required="" placeholder="Nama Ibu">
																</div>
															</div>
														</div>
														<div class="row">
															<div class="col-sm-6">
																<div class="form-group form-group-default">
																	<label>Pekerjaan Ayah</label>
																	<input type="text" name="pekerjaan_ayah" class="form-control" required="" placeholder="Pekerjaan Ayah">
																</div>
															</div>
															<div class="col-sm-6">
																<div class="form-group form-group-default">
																	<label>Pekerjaan Ibu</label>
																	<input type="text" name="pekerjaan_ibu" class="form-control" required="" placeholder="Pekerjaan Ibu">
																</div>
															</div>
														</div>
														<span class="badge badge-primary mb-4">Data Wali</span>
														<div class="row">
															<div class="col-sm-6">
																<div class="form-group form-group-default">
																	<label>Nama Wali</label>
																	<input type="text" name="nama_wali" class="form-control" placeholder="Nama Wali">
																</div>
															</div>
															<div class="col-sm-6">
																<div class="form-group form-group-default">
																	<label>Pekerjaan Wali</label>
																	<input type="text" name="pekerjaan_wali" class="form-control" placeholder="Pekerjaan Wali">
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
													<th>NPSN</th>
													<th>Nama Sekolah</th>
													<th>Kepala Sekolah</th>
													<th style="width: 10%">Action</th>
												</tr>
											</thead>
											
											<tbody>
												<?php
												$no = 0;
												foreach ($sekolah->result_array() as $row) :

													$no++;
													$id_data_sekolah               = $row['id_data_sekolah'];
													$npsn           = $row['npsn'];
													$nama_sekolah = $row['nama_sekolah'];
													$kepala_sekolah = $row['kepala_sekolah'];

													?>
													<tr>
														<td><?php echo $no;?></td>
														<td><?php echo $npsn;?></td>
														<td><?php echo $nama_sekolah;?></td>
														<td><?php echo $kepala_sekolah;?></td>

														<td>
															<div class="form-button-action">
																<button type="button" data-toggle="modal" data-target="#edit<?php echo $id_data_sekolah;?>" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Task">
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
			foreach ($sekolah->result_array() as $row) :

				$no++;
				$id_data_sekolah               = $row['id_data_sekolah'];
				$nama_sekolah = $row['nama_sekolah'];
				$npsn = $row['npsn'];
				$nss = $row['nss'];

				$alamat = $row['alamat'];
				$kelurahan = $row['kelurahan'];
				$kecamatan = $row['kecamatan'];
				$kota = $row['kota'];
				$provinsi = $row['provinsi'];

				$website = $row['website'];
				$email = $row['email'];
				$kepala_sekolah = $row['kepala_sekolah'];
				$nip_kepsek = $row['nip_kepsek'];
				?>
				<div class="modal fade" id="edit<?php echo $id_data_sekolah;?>" tabindex="-1" role="dialog" aria-hidden="true">
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
								<form action="<?php echo base_url('Homepage/Data/sekolah_update') ?>" method="POST">
									<span class="badge badge-primary mb-4">Data Sekolah</span>
									<div class="row">
										<div class="col-sm-6">
											<div class="form-group form-group-default">
												<label>Npsn</label>
												<input type="text" name="npsn" class="form-control" placeholder="Nis" value="<?php echo $npsn;?>">
												<input type="hidden" name="id_data_sekolah" value="<?php echo $id_data_sekolah;?>">
											</div>
										</div>
										<div class="col-sm-6">
											<div class="form-group form-group-default">
												<label>NSS</label>
												<input name="nss" type="text" class="form-control" placeholder="Nisn" value="<?php echo $nss;?>">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-12">
											<div class="form-group form-group-default">
												<label>Nama Sekolah</label>
												<input name="nama_sekolah" type="text" class="form-control" placeholder="Nama Siswa" value="<?php echo $nama_sekolah;?>">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-12">
											<div class="form-group form-group-default">
												<label>Alamat</label>
												<textarea class="form-control" name="alamat"><?php echo $alamat;?></textarea>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-6">
											<div class="form-group form-group-default">
												<label>Kelurahan</label>
												<input type="text" name="kelurahan" class="form-control" value="<?php echo $kelurahan;?>">
											</div>
										</div>
										<div class="col-sm-6">
											<div class="form-group form-group-default">
												<label>Kecamatan</label>
												<input type="text" name="kecamatan" class="form-control" value="<?php echo $kecamatan;?>">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-6">
											<div class="form-group form-group-default">
												<label>Kota</label>
												<input type="text" name="kota" class="form-control" value="<?php echo $kota;?>">
											</div>
										</div>
										<div class="col-sm-6">
											<div class="form-group form-group-default">
												<label>Provinsi</label>
												<input type="text" name="provinsi" class="form-control" value="<?php echo $provinsi;?>">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-12">
											<div class="form-group form-group-default">
												<label>Website</label>
												<input name="website" type="text" class="form-control" placeholder="Nama Siswa" value="<?php echo $website;?>">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-12">
											<div class="form-group form-group-default">
												<label>Email</label>
												<input name="email" type="email" class="form-control" placeholder="Nama Siswa" value="<?php echo $email;?>">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-6">
											<div class="form-group form-group-default">
												<label>NIP Kepala Sekolah</label>
												<input type="text" name="nip_kepsek" class="form-control" value="<?php echo $nip_kepsek;?>">
											</div>
										</div>
										<div class="col-sm-6">
											<div class="form-group form-group-default">
												<label>Kepala Sekolah</label>
												<input type="text" name="kepala_sekolah" class="form-control" value="<?php echo $kepala_sekolah;?>">
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