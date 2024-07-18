<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title><?php echo $title;?></title>
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

	<!-- CSS Files -->
	<link rel="stylesheet" href="<?php echo base_url() . "assets/Homepage/"; ?>css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo base_url() . "assets/Homepage/"; ?>css/atlantis.min.css">
	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link rel="stylesheet" href="<?php echo base_url() . "assets/Homepage/"; ?>css/demo.css">
</head>