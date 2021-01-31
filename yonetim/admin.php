<?php
@require_once("ayarlar/baglanti.php");


?>

<!doctype html>
<html class="fixed">
	<head>

		<!-- Basic -->
		<meta charset="UTF-8">

		<title> Kullanıcı Paneli</title>
		<meta name="keywords" content="Admin">
		<meta name="description" content="Admin">
		<meta name="author" content="okler.net">

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

		<!-- Web Fonts  -->
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">

		<!-- Vendor CSS -->
		<link rel="stylesheet" href="vendor\bootstrap\css\bootstrap.css">
		<link rel="stylesheet" href="vendor\animate\animate.css">

		<link rel="stylesheet" href="vendor\font-awesome\css\all.min.css">
		<link rel="stylesheet" href="vendor\magnific-popup\magnific-popup.css">
		<link rel="stylesheet" href="vendor\bootstrap-datepicker\css\bootstrap-datepicker3.css">

		<!-- Theme CSS -->
		<link rel="stylesheet" href="css\theme.css">

		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="css\custom.css">

		<!-- Head Libs -->
		<script src="vendor\modernizr\modernizr.js"></script>		<script src="master\style-switcher\style.switcher.localstorage.js"></script>

	</head>
	<body>
		<section class="body">

			<!-- start: header -->
			<header class="header">
				
			
				<!-- start: search & user box -->
				
					<span class="separator"></span>
			
					<div id="userbox" class="userbox">
						<a href="#" data-toggle="dropdown">
							<figure class="profile-picture">
								<img src="img\!logged-user.jpg" alt="Joseph Doe" class="rounded-circle" data-lock-picture="img/!logged-user.jpg">
							</figure>
							<div class="profile-info" data-lock-name="Melek Olcay" data-lock-email="melek@gmail.com">
								<span class="name">Melek Olcay</span>
								<span class="role">Kullanıcı</span>
							</div>
			
							<i class="fa custom-caret"></i>
						</a>
			
						<div class="dropdown-menu">
							<ul class="list-unstyled mb-2">
								<li class="divider"></li>
								
								<li>
									<a role="menuitem" tabindex="-1" href="/index.php"><i class="fas fa-power-off"></i> Çıkış Yap</a>
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
				        <div class="sidebar-title">
				           
				        </div>
				        <div class="sidebar-toggle d-none d-md-block" data-toggle-class="sidebar-left-collapsed" data-target="html" data-fire-event="sidebar-left-toggle">
				            <i class="fas fa-bars" aria-label="Toggle sidebar"></i>
				        </div>
				    </div>
				
				    <div class="nano">
				        <div class="nano-content">
				            <nav id="menu" class="nav-main" role="navigation">
				            
				                <ul class="nav nav-main">
				                   
				                    <li class="nav-parent nav-expanded nav-active">
				                        <a class="nav-link" href="#">
				                            <i class="fas fa-copy" aria-hidden="true"></i>
				                            <span>Menü</span>
				                        </a>
				                        <ul class="nav nav-children">
				                            <li>
				                                <a class="nav-link" href="pages-signup.html">
				                                   Üye Ol
				                                </a>
				                            </li>
				                            <li>
				                                <a class="nav-link" href="index.html">
				                                    Oturum Aç
				                                </a>
				                            </li>
				                           
				                            <li>
				                                <a class="nav-link" href="pages-user-profile.html">
				                                    Kullanıcı Profili
				                                </a>
				                            </li>
				                            
				                        
				                        </ul>
				                    </li>
			
				           
				
				        <script>
				            // Maintain Scroll Position
				            if (typeof localStorage !== 'undefined') {
				                if (localStorage.getItem('sidebar-left-position') !== null) {
				                    var initialPosition = localStorage.getItem('sidebar-left-position'),
				                        sidebarLeft = document.querySelector('#sidebar-left .nano-content');
				                    
				                    sidebarLeft.scrollTop = initialPosition;
				                }
				            }
				        </script>
				        
				
				    </div>
				
				</aside>
				<!-- end: sidebar -->

				<section role="main" class="content-body">
					<header class="page-header">
						<h2>Kullanıcı Paneli</h2>
					
						<div class="right-wrapper text-right">
							<ol class="breadcrumbs">
								<li>
								
										<i class="fas fa-home"></i>
									</a>
								</li>
								
								<li><a href="/index-uye.php">Anasayfa</a></li>
								
							</ol>
					
							<a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fas fa-chevron-left"></i></a>
						</div>
					</header>

					<h2>Admin Kısmına Hoşgeldinizzz :)</h2>
				</section>
			</div>

			
		</section>

		<!-- Vendor -->
		<script src="vendor\jquery\jquery.js"></script>		<script src="vendor\jquery-browser-mobile\jquery.browser.mobile.js"></script>		<script src="vendor\jquery-cookie\jquery.cookie.js"></script>		<script src="master\style-switcher\style.switcher.js"></script>		<script src="vendor\popper\umd\popper.min.js"></script>		<script src="vendor\bootstrap\js\bootstrap.js"></script>		<script src="vendor\bootstrap-datepicker\js\bootstrap-datepicker.js"></script>		<script src="vendor\common\common.js"></script>		<script src="vendor\nanoscroller\nanoscroller.js"></script>		<script src="vendor\magnific-popup\jquery.magnific-popup.js"></script>		<script src="vendor\jquery-placeholder\jquery.placeholder.js"></script>
		
		<!-- Theme Base, Components and Settings -->
		<script src="js\theme.js"></script>
		
		<!-- Theme Custom -->
		<script src="js\custom.js"></script>
		
		<!-- Theme Initialization Files -->
		<script src="js\theme.init.js"></script>
		<!-- Analytics to Track Preview Website -->		<script>		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)		  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');		  ga('create', 'UA-42715764-8', 'auto');		  ga('send', 'pageview');		</script>
	</body>
</html>