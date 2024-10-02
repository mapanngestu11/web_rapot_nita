<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>Data Rapor | SMK Bani Usman Manunggal </title>
	<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
	<link rel="icon" href="<?php echo base_url() . "assets/login/"; ?>images/logo.png" type="image/x-icon"/>

	<!-- Fonts and icons -->
	<script src="<?php echo base_url() . "assets/Homepage/"; ?>js/plugin/webfont/webfont.min.js"></script>
	<script>
		WebFont.load({
			google: {"families":["Lato:300,400,700,900"]},
			custom: {"families":["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"], urls: ['<?php echo base_url() . "assets/Homepage/"; ?>css/fonts.min.css']},
			active: function() {
				sessionStorage.fonts = true;
			}
		});
	</script>
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

	<!-- CSS Files -->
	<link rel="stylesheet" href="<?php echo base_url() . "assets/Homepage/"; ?>css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo base_url() . "assets/Homepage/"; ?>css/atlantis.min.css">

	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link rel="stylesheet" href="<?php echo base_url() . "assets/Homepage/"; ?>css/demo.css">
</head>
<body>
	<div class="wrapper">
		<div class="main-header">
			<!-- Logo Header -->
			<div class="logo-header" data-background-color="blue">
				
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
		<?php include 'Part/Sidebar.php';?>
		<!-- End Sidebar -->

		<div class="main-panel">
			<div class="content">
				<div class="panel-header bg-primary-gradient">
					<div class="page-inner py-5">
						<div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
							<div>
								<h2 class="text-white pb-2 fw-bold">Dashboard</h2>
								<h5 class="text-white op-7 mb-2">SMK BANI USMAN MANUNGGAL</h5>
							</div>
							<?php 
							$hak_akses = $this->session->userdata('hak_akses');
							if ($hak_akses == 'Admin' || $hak_akses == 'Kurikulum') { 
								?>
								<div class="ml-md-auto py-2 py-md-0">
									<a href="#" class="btn btn-white btn-border btn-round mr-2">Cetak Rapott</a>
									<a href="#" class="btn btn-secondary btn-round">Tambah Data Siswa</a>
								</div>

							<?php }else{ ?>

							<?php }?>
						</div>
					</div>
				</div>
				<?php 
				$hak_akses = $this->session->userdata('hak_akses');
				if ($hak_akses == 'Admin' || $hak_akses == 'Kurikulum') { 
					?>
					<div class="page-inner mt--5">
						<div class="row mt--2">
							<div class="col-md-12">
								<div class="card full-height">
									<div class="card-body">
										<div class="card-title">Overall statistics</div>
										<div class="card-category">Daily information about statistics in system</div>
										<div class="d-flex flex-wrap justify-content-around pb-2 pt-4">
											<div class="px-2 pb-2 pb-md-0 text-center">
												<div id="circles-1"></div>
												<h6 class="fw-bold mt-3 mb-0">Data Siswa</h6>
											</div>
											<div class="px-2 pb-2 pb-md-0 text-center">
												<div id="circles-2"></div>
												<h6 class="fw-bold mt-3 mb-0">Data Guru</h6>
											</div>
											<div class="px-2 pb-2 pb-md-0 text-center">
												<div id="circles-3"></div>
												<h6 class="fw-bold mt-3 mb-0">Data Pesan</h6>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-md-12">
								<div class="card full-height">
									<div class="card-header">
										<div class="card-title">Laporan Harian</div>
									</div>
									<div class="card-body">
										<ol class="activity-feed">
											<li class="feed-item feed-item-secondary">
												<time class="date" datetime="9-25">Juli 25</time>
												<span class="text"><strong>Pak Budi </strong>Melakukan Tambah Data <a href="#">"Rapot Kelas X"</a></span>
											</li>
											<li class="feed-item feed-item-success">
												<time class="date" datetime="9-24">Juli 25</time>
												<span class="text"><strong>Pak Budi </strong>Melakukan Tambah Data<a href="#">"Rapot Kelas XI"</a></span>
											</li>
											<li class="feed-item feed-item-info">
												<time class="date" datetime="9-23">Sep 23</time>
												<span class="text"><strong>Pak Joko</strong>Melakukan Update Data<a href="single-group.php">"Rapot Kelas X"</a></span>
											</li>

										</ol>
									</div>
								</div>
							</div>

						</div>
					</div>
				<?php }else{ ?>

				<?php }?>
			</div>
			<footer class="footer">
				<div class="container-fluid">
					<nav class="pull-left">
						<ul class="nav">
							<li class="nav-item">
								<a class="nav-link" href="https://www.themekita.com">
									ThemeKita
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#">
									Help
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#">
									Licenses
								</a>
							</li>
						</ul>
					</nav>
					<div class="copyright ml-auto">
						2018, made with <i class="fa fa-heart heart text-danger"></i> by <a href="https://www.themekita.com">ThemeKita</a>
					</div>				
				</div>
			</footer>
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
	<!--   Core JS Files   -->
	<script src="<?php echo base_url() . "assets/Homepage/"; ?>js/core/jquery.3.2.1.min.js"></script>
	<script src="<?php echo base_url() . "assets/Homepage/"; ?>js/core/popper.min.js"></script>
	<script src="<?php echo base_url() . "assets/Homepage/"; ?>js/core/bootstrap.min.js"></script>

	<!-- jQuery UI -->
	<script src="<?php echo base_url() . "assets/Homepage/"; ?>js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
	<script src="<?php echo base_url() . "assets/Homepage/"; ?>js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>

	<!-- jQuery Scrollbar -->
	<script src="<?php echo base_url() . "assets/Homepage/"; ?>js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>


	<!-- Chart JS -->
	<script src="<?php echo base_url() . "assets/Homepage/"; ?>js/plugin/chart.js/chart.min.js"></script>

	<!-- jQuery Sparkline -->
	<script src="<?php echo base_url() . "assets/Homepage/"; ?>js/plugin/jquery.sparkline/jquery.sparkline.min.js"></script>

	<!-- Chart Circle -->
	<script src="<?php echo base_url() . "assets/Homepage/"; ?>js/plugin/chart-circle/circles.min.js"></script>

	<!-- Datatables -->
	<script src="<?php echo base_url() . "assets/Homepage/"; ?>js/plugin/datatables/datatables.min.js"></script>

	<!-- Bootstrap Notify -->
	<script src="<?php echo base_url() . "assets/Homepage/"; ?>js/plugin/bootstrap-notify/bootstrap-notify.min.js"></script>

	<!-- jQuery Vector Maps -->
	<script src="<?php echo base_url() . "assets/Homepage/"; ?>js/plugin/jqvmap/jquery.vmap.min.js"></script>
	<script src="<?php echo base_url() . "assets/Homepage/"; ?>js/plugin/jqvmap/maps/jquery.vmap.world.js"></script>

	<!-- Sweet Alert -->
	<script src="<?php echo base_url() . "assets/Homepage/"; ?>js/plugin/sweetalert/sweetalert.min.js"></script>

	<!-- Atlantis JS -->
	<script src="<?php echo base_url() . "assets/Homepage/"; ?>js/atlantis.min.js"></script>

	<!-- Atlantis DEMO methods, don't include it in your project! -->
	<script src="<?php echo base_url() . "assets/Homepage/"; ?>js/setting-demo.js"></script>
	<script src="<?php echo base_url() . "assets/Homepage/"; ?>js/demo.js"></script>
	<script>
		Circles.create({
			id:'circles-1',
			radius:45,
			value:60,
			maxValue:100,
			width:7,
			text: 5,
			colors:['#f1f1f1', '#FF9E27'],
			duration:400,
			wrpClass:'circles-wrp',
			textClass:'circles-text',
			styleWrapper:true,
			styleText:true
		})

		Circles.create({
			id:'circles-2',
			radius:45,
			value:70,
			maxValue:100,
			width:7,
			text: 36,
			colors:['#f1f1f1', '#2BB930'],
			duration:400,
			wrpClass:'circles-wrp',
			textClass:'circles-text',
			styleWrapper:true,
			styleText:true
		})

		Circles.create({
			id:'circles-3',
			radius:45,
			value:40,
			maxValue:100,
			width:7,
			text: 12,
			colors:['#f1f1f1', '#F25961'],
			duration:400,
			wrpClass:'circles-wrp',
			textClass:'circles-text',
			styleWrapper:true,
			styleText:true
		})

		var totalIncomeChart = document.getElementById('totalIncomeChart').getContext('2d');

		var mytotalIncomeChart = new Chart(totalIncomeChart, {
			type: 'bar',
			data: {
				labels: ["S", "M", "T", "W", "T", "F", "S", "S", "M", "T"],
				datasets : [{
					label: "Total Income",
					backgroundColor: '#ff9e27',
					borderColor: 'rgb(23, 125, 255)',
					data: [6, 4, 9, 5, 4, 6, 4, 3, 8, 10],
				}],
			},
			options: {
				responsive: true,
				maintainAspectRatio: false,
				legend: {
					display: false,
				},
				scales: {
					yAxes: [{
						ticks: {
							display: false //this will remove only the label
						},
						gridLines : {
							drawBorder: false,
							display : false
						}
					}],
					xAxes : [ {
						gridLines : {
							drawBorder: false,
							display : false
						}
					}]
				},
			}
		});

		$('#lineChart').sparkline([105,103,123,100,95,105,115], {
			type: 'line',
			height: '70',
			width: '100%',
			lineWidth: '2',
			lineColor: '#ffa534',
			fillColor: 'rgba(255, 165, 52, .14)'
		});
	</script>
</body>
</html>