<?php

include 'config.php';
session_start();

if (isset($_POST['edit'])) {
    $id = $_GET['id'];
    $alternative = $_POST['alternative'];
    $akreditasi = $_POST['akreditasi'];
    $fasilitas = $_POST['fasilitas'];
    $magister = $_POST['magister'];
    $ukm = $_POST['ukm'];
    $biaya = $_POST['biaya'];

    $query = $conn->query("UPDATE penilaian SET alternative='$alternative', akreditasi='$akreditasi',  fasilitas='$fasilitas', magister='$magister', ukm='$ukm', biaya='$biaya' WHERE id='$id'");

    if (!$query) {
       echo "
          <script>
          alert('Data gagal diedit');
          window.location.href = 'edit_penilaian.php';
          </script>
          ";
    }  else {
        echo "
          <script>
          alert('Data berhasil diedit');
          window.location.href = 'penilaian.php';
          </script>
          ";
    }
}

?>

<!doctype html>
<html class="fixed">
	<head>
		<!-- Basic -->
		<meta charset="UTF-8">

		<title>Kampus Terbaik</title>
		<meta name="keywords" content="HTML5 Admin Template" />
		<meta name="description" content="JSOFT Admin - Responsive HTML5 Template">
		<meta name="author" content="JSOFT.net">

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
		<!-- Web Fonts  -->
		<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">
		<!-- Vendor CSS -->
		<link rel="stylesheet" href="template/assets/assets/vendor/bootstrap/css/bootstrap.css" />
		<link rel="stylesheet" href="template/assets/assets/vendor/font-awesome/css/font-awesome.css" />
		<link rel="stylesheet" href="template/assets/assets/vendor/magnific-popup/magnific-popup.css" />
		<link rel="stylesheet" href="template/assets/assets/vendor/bootstrap-datepicker/css/datepicker3.css" />
		<!-- Specific Page Vendor CSS -->
		<link rel="stylesheet" href="template/assets/assets/vendor/jquery-ui/css/ui-lightness/jquery-ui-1.10.4.custom.css" />
		<link rel="stylesheet" href="template/assets/assets/vendor/bootstrap-multiselect/bootstrap-multiselect.css" />
		<link rel="stylesheet" href="template/assets/assets/vendor/morris/morris.css" />
		<!-- Theme CSS -->
		<link rel="stylesheet" href="template/assets/assets/stylesheets/theme.css" />
		<!-- Skin CSS -->
		<link rel="stylesheet" href="template/assets/assets/stylesheets/skins/default.css" />
		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="template/assets/assets/stylesheets/theme-custom.css">
		<!-- Head Libs -->
		<script src="template/assets/assets/vendor/modernizr/modernizr.js"></script>
	</head>
	<body>
		<section class="body">

			<!-- start: header -->
			<header class="header">
				<div class="logo-container">
					<a href="../" class="logo">
						<img src="https://upload.wikimedia.org/wikipedia/commons/6/60/Logo_Universitas_Tadulako_Palu.png" height="35" alt="JSOFT Admin" class="brand-image  elevation-3" style="opacity: .8">
						<span class="brand-text font-weight-light">UNIVERSITAS TADULAKO</span>
					</a>
					<div class="visible-xs toggle-sidebar-left" data-toggle-class="sidebar-left-opened" data-target="html" data-fire-event="sidebar-left-opened">
						<i class="fa fa-bars" aria-label="Toggle sidebar"></i>
					</div>
				</div>
			
				<!-- start: search & user box -->
				<div class="header-right">
					<div id="userbox" class="userbox">
						<a href="#" data-toggle="dropdown">
							<figure class="profile-picture">
								<img src="https://martapura.id/assets/uploads/aparatur/3495188ad8f09755a6cf854fb6774f11.png" alt="User" class="img-circle" data-lock-picture="template/assets/assets/images/!logged-user.jpg" />
							</figure>
							<div class="profile-info" data-lock-name="John Doe" data-lock-email="johndoe@JSOFT.com">
								<span class="name"><?php echo  $_SESSION['username'] ?></span>
								<span class="role">User</span>
							</div>
			
							<i class="fa custom-caret"></i>
						</a>
			
						<div class="dropdown-menu">
							<ul class="list-unstyled">
								<li class="divider"></li>
								<li>
									<a role="menuitem" tabindex="-1" href="pages-user-profile.html"><i class="fa fa-user"></i> My Profile</a>
								</li>
								<li>
									<a role="menuitem" tabindex="-1" href="#" data-lock-screen="true"><i class="fa fa-lock"></i> Lock Screen</a>
								</li>
								<li>
									<a role="menuitem" tabindex="-1" href="login.php"><i class="fa fa-power-off"></i> Logout</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<!-- end: search & user box -->
			</header>
			<!-- end: header -->

			<div class="inner-wrapper">
				<!-- start: sidebar -->
				<aside id="sidebar-left" class="sidebar-left">
				
					<div class="sidebar-header">
						<div class="sidebar-toggle hidden-xs" data-toggle-class="sidebar-left-collapsed" data-target="html" data-fire-event="sidebar-left-toggle">
							<i class="fa fa-bars" aria-label="Toggle sidebar"></i>
						</div>
					</div>
				
					<div class="nano">
						<div class="nano-content">
							<nav id="menu" class="nav-main" role="navigation">
								<ul class="nav nav-main">
									<li class="nav-active">
										<a href="index.php">
											<i class="fa fa-home" aria-hidden="true"></i>
											<span>Dashboard</span>
										</a>
									</li>
									
									<li class="nav-parent">
										<a>
											<i class="fa fa-list-alt" aria-hidden="true"></i>
											<span>MENU</span>
										</a>
										<ul class="nav nav-children">
											<li>
												<a href="alternative.php">
													 ALTERNATIVE
												</a>
											</li>
											<li>
												<a href="penilaian.php">
													 PENILAIAN
												</a>
											</li>
											<li>
												<a href="proses.php">
													 PROSES
												</a>
											</li>
										</ul>
									</li>
								</ul>
							</nav>
				
							<hr class="separator" />
				
							<hr class="separator" />
				
						</div>
				
					</div>
				
				</aside>
				<!-- end: sidebar -->

				<section role="main" class="content-body">
					<header class="page-header">
						<h2>SPK MAUT</h2>
					
						<div class="right-wrapper pull-right">
							<a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a>
						</div>
					</header>
                        <section class="panel">
							<header class="panel-heading">
						        <h2 class="panel-title">PENILAIAN</h2>
							</header>
								<div class="panel-body">
									<div class="form-group">
										<form class="form-group" method="POST">
											<label class="col-md-2 control-label">Nama Kampus</label>
											<div class="col-md-6">
											<select name="alternative" id="alternative" class="form-control col-lg-8" value="<?= $row['alternative']; ?>">
                                    			<?php
                                    				$alternative = $conn->query("SELECT * FROM alternative");

                                    				if ($alternative->num_rows > 0) {
                                        			while ($row = $alternative->fetch_assoc()) {
                                    			?>
                                            			<option value="<?= $row['nama_kampus']; ?>"><?= $row['nama_kampus'] ?></option>
                                    			<?php }
                                    			 ?>
                                			</select>
											</div>
										</div>	
								</div>
                                <div class="panel-body">
										<div class="form-group">
											<label class="col-md-2 control-label">Akreditasi</label>
											<div class="col-md-6">
                                                <select name="akreditasi" id="akreditasi" class="form-control col-lg-8">
                                                    <option>-</option>
                                					<option value="5">A</option>
                                					<option value="4">B</option>
                                					<option value="3">C</option>
												</select>
											</div>
										</div>	
								</div>
                                <div class="panel-body">
										<div class="form-group">
											<label class="col-md-2 control-label">Fasilitas</label>
											<div class="col-md-6">
                                                <select name="fasilitas" id="fasilitas" class="form-control col-lg-8">
                                                    <option>-</option>
                                					<option value="5">Sangat Lengkap</option>
                                					<option value="4">Lengkap</option>
													<option value="3">Cukup</option>
                                					<option value="2">Kurang Lengkap</option>
													<option value="1">Tidak Lengkap</option>
												</select>
											</div>
										</div>
								</div>
								<div class="panel-body">
										<div class="form-group">
											<label class="col-md-2 control-label">Magister</label>
											<div class="col-md-6">
                                                <select name="magister" id="magister" class="form-control col-lg-8">
                                                    <option>-</option>
                                					<option value="5">Ya</option>
                                					<option value="4">Tidak</option>
												</select>
											</div>
										</div>
									
								</div>
								<div class="panel-body">
										<div class="form-group">
											<label class="col-md-2 control-label">UKM</label>
											<div class="col-md-6">
                                                <select name="ukm" id="ukm" class="form-control col-lg-8">
                                                    <option>-</option>
													<option value="5">Sangat Baik</option>
                    								<option value="4">Baik</option>
                    								<option value="3">CUkup</option>
                    								<option value="2">Kurang Baik</option>
                    								<option value="1">Tidak Baik</option>
												</select>
											</div>
										</div>
									
								</div>
								<div class="panel-body">
										<div class="form-group">
											<label class="col-md-2 control-label">Biaya</label>
											<div class="col-md-6">
                                                <select name="biaya" id="biaya" class="form-control col-lg-8">
                                                    <option>-</option>
													<option value="5">2-5,9 jt</option>
                    								<option value="4">6-9,9 jt</option>
                    								<option value="3">Lebih 10 jt</option>
												</select>
											</div>
										</div>
                                    
								</div>
                                <div class="panel-body">
										<div class="In_solid"></div>
                            					<div class="item form-group">
                                					<div class="col-md-6 col-sm-5 offset-md-3">
                                    				<button class="btn btn-primary" type="reset">RESET</button>
                                    				<button type="submit" class="btn btn-success" name="edit">SIMPAN</button>
                                			</div>
                            			</div>
                                        <?php 
                                        } ?>
									</form>
								</div>
						</section>
                        <!-- start: page -->

			<aside id="sidebar-right" class="sidebar-right">
				<div class="nano">
					<div class="nano-content">
						<a href="#" class="mobile-close visible-xs">
							Collapse <i class="fa fa-chevron-right"></i>
						</a>
						<div class="sidebar-right-wrapper">
							<div class="sidebar-widget widget-calendar">
								<h6>KELENDER</h6>
									<div data-plugin-datepicker data-plugin-skin="dark" ></div>
							</div>
						</div>
					</div>
				</div>
			</aside>
            <!-- /Page Content -->
            
            <!-- footer content -->
            <footer>
                <div class="pull-right">Underground Programing</div>
                <div class="clearfix"></div>
            </footer>
            <!-- /footer content -->

		</section>

		<!-- Vendor -->
		<script src="template/assets/assets/vendor/jquery/jquery.js"></script>
		<script src="template/assets/assets/vendor/jquery-browser-mobile/jquery.browser.mobile.js"></script>
		<script src="template/assets/assets/vendor/bootstrap/js/bootstrap.js"></script>
		<script src="template/assets/assets/vendor/nanoscroller/nanoscroller.js"></script>
		<script src="template/assets/assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
		<script src="template/assets/assets/vendor/magnific-popup/magnific-popup.js"></script>
		<script src="template/assets/assets/vendor/jquery-placeholder/jquery.placeholder.js"></script>
		
		<!-- Specific Page Vendor -->
		<script src="template/assets/assets/vendor/jquery-ui/js/jquery-ui-1.10.4.custom.js"></script>
		<script src="template/assets/assets/vendor/jquery-ui-touch-punch/jquery.ui.touch-punch.js"></script>
		<script src="template/assets/assets/vendor/jquery-appear/jquery.appear.js"></script>
		<script src="template/assets/assets/vendor/bootstrap-multiselect/bootstrap-multiselect.js"></script>
		<script src="template/assets/assets/vendor/jquery-easypiechart/jquery.easypiechart.js"></script>
		<script src="template/assets/assets/vendor/flot/jquery.flot.js"></script>
		<script src="template/assets/assets/vendor/flot-tooltip/jquery.flot.tooltip.js"></script>
		<script src="template/assets/assets/vendor/flot/jquery.flot.pie.js"></script>
		<script src="template/assets/assets/vendor/flot/jquery.flot.categories.js"></script>
		<script src="template/assets/assets/vendor/flot/jquery.flot.resize.js"></script>
		<script src="template/assets/assets/vendor/jquery-sparkline/jquery.sparkline.js"></script>
		<script src="template/assets/assets/vendor/raphael/raphael.js"></script>
		<script src="template/assets/assets/vendor/morris/morris.js"></script>
		<script src="template/assets/assets/vendor/gauge/gauge.js"></script>
		<script src="template/assets/assets/vendor/snap-svg/snap.svg.js"></script>
		<script src="template/assets/assets/vendor/liquid-meter/liquid.meter.js"></script>
		<script src="template/assets/assets/vendor/jqvmap/jquery.vmap.js"></script>
		<script src="template/assets/assets/vendor/jqvmap/data/jquery.vmap.sampledata.js"></script>
		<script src="template/assets/assets/vendor/jqvmap/maps/jquery.vmap.world.js"></script>
		<script src="template/assets/assets/vendor/jqvmap/maps/continents/jquery.vmap.africa.js"></script>
		<script src="template/assets/assets/vendor/jqvmap/maps/continents/jquery.vmap.asia.js"></script>
		<script src="template/assets/assets/vendor/jqvmap/maps/continents/jquery.vmap.australia.js"></script>
		<script src="template/assets/assets/vendor/jqvmap/maps/continents/jquery.vmap.europe.js"></script>
		<script src="template/assets/assets/vendor/jqvmap/maps/continents/jquery.vmap.north-america.js"></script>
		<script src="template/assets/assets/vendor/jqvmap/maps/continents/jquery.vmap.south-america.js"></script>
		
		<!-- Theme Base, Components and Settings -->
		<script src="template/assets/assets/javascripts/theme.js"></script>
		
		<!-- Theme Custom -->
		<script src="template/assets/assets/javascripts/theme.custom.js"></script>
		
		<!-- Theme Initialization Files -->
		<script src="template/assets/assets/javascripts/theme.init.js"></script>


		<!-- Examples -->
		<script src="template/assets/assets/javascripts/dashboard/examples.dashboard.js"></script>
	</body>
</html>
