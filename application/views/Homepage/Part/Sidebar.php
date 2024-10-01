<?php if($this->session->userdata('hak_akses')==='admin' ):?> 
	<div class="sidebar sidebar-style-2">			
		<div class="sidebar-wrapper scrollbar scrollbar-inner">
			<div class="sidebar-content">
				<div class="user">
					<div class="avatar-sm float-left mr-2">
						<img src="<?php echo base_url() . "assets/Homepage/"; ?>img/user.png" alt="..." class="avatar-img rounded-circle">
					</div>
					<div class="info">
						<a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
							<span>
								<?php 
								$nama_lengkap = $this->session->userdata('nama_lengkap');
								$hak_akses = $this->session->userdata('hak_akses');
								?>
								<?php echo $nama_lengkap;?>
								<span class="user-level"><?php echo $hak_akses;?> </span>
								<span class="caret"></span>
							</span>
						</a>
						<div class="clearfix"></div>

						<div class="collapse in" id="collapseExample">
							<ul class="nav">
								<li>
									<a href="#profile">
										<span class="link-collapse">My Profile</span>
									</a>
								</li>
								<li>
									<a href="#edit">
										<span class="link-collapse">Edit Profile</span>
									</a>
								</li>
								<li>
									<a href="#settings">
										<span class="link-collapse">Settings</span>
									</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<ul class="nav nav-primary">
					<li class="nav-item active">
						<a data-toggle="collapse" href="#dashboard" class="collapsed" aria-expanded="false">
							<i class="fas fa-home"></i>
							<p>Dashboard</p>
							<span class="caret"></span>
						</a>

					</li>
					<li class="nav-section">
						<span class="sidebar-mini-icon">
							<i class="fa fa-ellipsis-h"></i>
						</span>
						<h4 class="text-section">Data Master</h4>
					</li>
					<li class="nav-item">
						<a data-toggle="collapse" href="#base">
							<i class="fas fa-folder"></i>
							<p>Administrasi</p>
							<span class="caret"></span>
						</a>
						<div class="collapse" id="base">
							<ul class="nav nav-collapse">
								<li>
									<a href="<?php echo base_url('Homepage/Data/Sekolah/') ?>">
										<span class="sub-item">Data Sekolah</span>
									</a>
								</li>
								<li>
									<a href="<?php echo base_url('Homepage/Tapel/') ?>">
										<span class="sub-item">Data Tahun Pelajaran</span>
									</a>
								</li>
								<li>
									<a href="<?php echo base_url('Homepage/Kelas/') ?>">
										<span class="sub-item">Data Kelas</span>
									</a>
								</li>
								<li>
									<a href="<?php echo base_url('Homepage/Mapel/') ?>">
										<span class="sub-item">Data Mapel</span>
									</a>
								</li>
							</ul>
						</div>
					</li>
					<li class="nav-item">
						<a data-toggle="collapse" href="#sidebarLayouts">
							<i class="fas fa-users"></i>
							<p>Data Biodata</p>
							<span class="caret"></span>
						</a>
						<div class="collapse" id="sidebarLayouts">
							<ul class="nav nav-collapse">
								<li>
									<a href="<?php echo base_url('Homepage/Siswa/') ?>">
										<span class="sub-item">Data Siswa</span>
									</a>
								</li>

								<li>
									<a href="<?php echo base_url('Homepage/Guru/') ?>">
										<span class="sub-item">Data Guru</span>
									</a>
								</li>
								
								<li>
									<a href="<?php echo base_url('Homepage/User/') ?>">
										<span class="sub-item">Data Admin</span>
									</a>
								</li>
							</ul>
						</div>
					</li>
					<li class="nav-section">
						<span class="sidebar-mini-icon">
							<i class="fa fa-ellipsis-h"></i>
						</span>
						<h4 class="text-section">Data Penilaian</h4>
					</li>

					<li class="nav-item">
						<a data-toggle="collapse" href="#forms">
							<i class="fas fa-pen-square"></i>
							<p>Informasi Nilai</p>
							<span class="caret"></span>
						</a>
						<div class="collapse" id="forms">
							<ul class="nav nav-collapse">
								<li>
									<a href="<?php echo base_url('Homepage/Nilai_pembelajaran/') ?>">
										<span class="sub-item">Input Nilai KKM</span>
									</a>
								</li>
								<li>
									<a href="<?php echo base_url('Homepage/Nilai_mapel/') ?>">
										<span class="sub-item">Input Nilai Mapel</span>
									</a>
								</li>

								<li>
									<a href="<?php echo base_url('Homepage/Nilai_sosial/') ?>">
										<span class="sub-item">Nilai Sosial</span>
									</a>
								</li>
								<li>
									<a href="<?php echo base_url('Homepage/Nilai_spiritual/') ?>">
										<span class="sub-item">Nilai Spiritual</span>
									</a>
								</li>
								<li>
									<a href="<?php echo base_url('Homepage/Kehadiran/') ?>">
										<span class="sub-item">Ketidakhadiran</span>
									</a>
								</li>
								
							</ul>
						</div>
					</li>
					<li class="nav-section">
						<span class="sidebar-mini-icon">
							<i class="fa fa-ellipsis-h"></i>
						</span>
						<h4 class="text-section">Data Rapot</h4>
					</li>
					<li class="nav-item">
						<a data-toggle="collapse" href="#tables">
							<i class="fas fa-file"></i>
							<p>Rapot Siswa</p>
							<span class="caret"></span>
						</a>
						<div class="collapse" id="tables">
							<ul class="nav nav-collapse">
								<li>
									<a href="<?php echo base_url('Homepage/Nilai_akhir/') ?>">
										<span class="sub-item">Nilai Akhir</span>
									</a>
								</li>
								<li>
									<a href="<?php echo base_url('Homepage/Rapot/') ?>">
										<span class="sub-item">Cetak Rapot</span>
									</a>
								</li>
							</ul>
						</div>
					</li>

				</ul>
			</div>
		</div>
	</div>
	<?php elseif($this->session->userdata('hak_akses')==='guru'):?> 
		<div class="sidebar sidebar-style-2">			
			<div class="sidebar-wrapper scrollbar scrollbar-inner">
				<div class="sidebar-content">
					<div class="user">
						<div class="avatar-sm float-left mr-2">
							<img src="<?php echo base_url() . "assets/Homepage/"; ?>img/user.png" alt="..." class="avatar-img rounded-circle">
						</div>
						<div class="info">
							<a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
								<span>
									<?php 
									$nama_lengkap = $this->session->userdata('nama_guru');
									$hak_akses = $this->session->userdata('hak_akses');
									?>
									<?php echo $nama_lengkap;?>
									<span class="user-level"><?php echo $hak_akses;?> </span>
									<span class="caret"></span>
								</span>
							</a>
							<div class="clearfix"></div>

							<div class="collapse in" id="collapseExample">
								<ul class="nav">
									<li>
										<a href="#profile">
											<span class="link-collapse">My Profile</span>
										</a>
									</li>
									<li>
										<a href="#edit">
											<span class="link-collapse">Edit Profile</span>
										</a>
									</li>
									<li>
										<a href="#settings">
											<span class="link-collapse">Settings</span>
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<ul class="nav nav-primary">
						<li class="nav-item active">
							<a data-toggle="collapse" href="#dashboard" class="collapsed" aria-expanded="false">
								<i class="fas fa-home"></i>
								<p>Dashboard</p>
								<span class="caret"></span>
							</a>

						</li>

						<li class="nav-section">
							<span class="sidebar-mini-icon">
								<i class="fa fa-ellipsis-h"></i>
							</span>
							<h4 class="text-section">Data Penilaian</h4>
						</li>

						<li class="nav-item">
							<a data-toggle="collapse" href="#forms">
								<i class="fas fa-pen-square"></i>
								<p>Informasi Nilai</p>
								<span class="caret"></span>
							</a>
							<div class="collapse" id="forms">
								<ul class="nav nav-collapse">
									<li>
										<a href="<?php echo base_url('Homepage/Nilai_pembelajaran/input_nilai_mapel') ?>">
											<span class="sub-item">Pembelajaran</span>
										</a>
									</li>
									<li>
										<a href="#">
											<span class="sub-item">Nilai Sosial</span>
										</a>
									</li>
									<li>
										<a href="#">
											<span class="sub-item">Nilai Spiritual</span>
										</a>
									</li>
									<li>
										<a href="#">
											<span class="sub-item">Ketidakhadiran</span>
										</a>
									</li>
									<li>
										<a href="#">
											<span class="sub-item">Ekstrakurikuler</span>
										</a>
									</li>
									<li>
										<a href="#">
											<span class="sub-item">Prestasi</span>
										</a>
									</li>
								</ul>
							</div>
						</li>
						<li class="nav-section">
							<span class="sidebar-mini-icon">
								<i class="fa fa-ellipsis-h"></i>
							</span>
							<h4 class="text-section">Data Rapot</h4>
						</li>
						<li class="nav-item">
							<a data-toggle="collapse" href="#tables">
								<i class="fas fa-file"></i>
								<p>Rapot Siswa</p>
								<span class="caret"></span>
							</a>
							<div class="collapse" id="tables">
								<ul class="nav nav-collapse">
									<li>
										<a href="#">
											<span class="sub-item">Nilai Akhir</span>
										</a>
									</li>
									<li>
										<a href="tables/datatables.html">
											<span class="sub-item">Cetak Rapot</span>
										</a>
									</li>
								</ul>
							</div>
						</li>

					</ul>
				</div>
			</div>
		</div>
		<?php elseif($this->session->userdata('hak_akses')==='siswa'):?> 
			<div class="sidebar sidebar-style-2">			
				<div class="sidebar-wrapper scrollbar scrollbar-inner">
					<div class="sidebar-content">
						<div class="user">
							<div class="avatar-sm float-left mr-2">
								<img src="<?php echo base_url() . "assets/Homepage/"; ?>img/user.png" alt="..." class="avatar-img rounded-circle">
							</div>
							<div class="info">
								<a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
									<span>
										<?php 
										$nama_lengkap = $this->session->userdata('nama_siswa');
										$hak_akses = $this->session->userdata('hak_akses');
										?>
										<?php echo $nama_lengkap;?>
										<span class="user-level"><?php echo $hak_akses;?> </span>
										<span class="caret"></span>
									</span>
								</a>
								<div class="clearfix"></div>

								<div class="collapse in" id="collapseExample">
									<ul class="nav">
										<li>
											<a href="#profile">
												<span class="link-collapse">My Profile</span>
											</a>
										</li>
										<li>
											<a href="#edit">
												<span class="link-collapse">Edit Profile</span>
											</a>
										</li>
										<li>
											<a href="#settings">
												<span class="link-collapse">Settings</span>
											</a>
										</li>
									</ul>
								</div>
							</div>
						</div>
						<ul class="nav nav-primary">
							<li class="nav-item active">
								<a data-toggle="collapse" href="#dashboard" class="collapsed" aria-expanded="false">
									<i class="fas fa-home"></i>
									<p>Dashboard</p>
									<span class="caret"></span>
								</a>
							</li>
							<li class="nav-section">
								<span class="sidebar-mini-icon">
									<i class="fa fa-ellipsis-h"></i>
								</span>
								<h4 class="text-section">Data Rapot</h4>
							</li>
							<li class="nav-item">
								<a data-toggle="collapse" href="#tables">
									<i class="fas fa-file"></i>
									<p>Rapot Siswa</p>
									<span class="caret"></span>
								</a>
								<div class="collapse" id="tables">
									<ul class="nav nav-collapse">
										<li>
											<a href="#">
												<span class="sub-item">Nilai Akhir</span>
											</a>
										</li>
										<li>
											<a href="tables/datatables.html">
												<span class="sub-item">Cetak Rapot</span>
											</a>
										</li>
									</ul>
								</div>
							</li>

						</ul>
					</div>
				</div>
			</div>
			<?php endif;?>