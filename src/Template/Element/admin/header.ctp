<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<meta name="description" content="">
		<meta name="author" content="">
		<?= $this->Html->meta(
			'favicon.ico',
			'/public/images/favicon.ico',
			array('type'=>'icon')
		) ?>
		<!-- Title -->
		<title>FastFood | admin</title>

		<!-- Vendor CSS -->
		<?= $this->Html->css([
			"/admin/vendor/bootstrap4/css/bootstrap.min.css",
			"/admin/vendor/themify-icons/themify-icons.css",
			"/admin/vendor/font-awesome/css/font-awesome.min.css",
			"/admin/vendor/animate.css/animate.min.css",
			"/admin/vendor/jscrollpane/jquery.jscrollpane.css",
			"/admin/vendor/waves/waves.min.css",
			"/admin/vendor/switchery/dist/switchery.min.css",
			"/admin/vendor/morris/morris.css",		
			"/admin/vendor/DataTables/css/dataTables.bootstrap4.min.css",
			"/admin/vendor/DataTables/Buttons/css/buttons.dataTables.min.css",
			"/admin/vendor/dropify/dist/css/dropify.min.css",
			"/admin/css/core.css",
			"/admin/css/custom.css"
		])?>

		<!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body class="fixed-sidebar fixed-header skin-default content-appear">
		<div class="wrapper">

			<!-- Preloader -->
			<div class="preloader"></div>

			<!-- Sidebar -->
			<div class="site-overlay"></div>
			<?= $this->Element('admin/sidebar') ?>
			<!-- Sidebar second -->
			<!-- Header -->
			<?= $this->Element('admin/sideheader') ?>
			<!--  -->
			<div class="site-content">

