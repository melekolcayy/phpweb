<?php 
@include_once("assets/baglanti.php");
include "assets/function.php";
include "assets/cart_db.php";
?>
    
<!doctype html>
<html lang="tr">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="icon" type="image/png" sizes="32x32" href="image\favicon-32x32.png">
<link rel="stylesheet" href="css\animate.css" type="text/css">  
<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css" rel="stylesheet">
<link href="css\ionicons.min.css" type="text/css" rel="stylesheet">
<link href="css\owl.carousel.min.css" type="text/css" rel="stylesheet">
<link href="css\owl.theme.default.min.css" type="text/css" rel="stylesheet">
<link href="css\magnific-popup.css" type="text/css" rel="stylesheet">
<link href="css\bootstrap.min.css" type="text/css" rel="stylesheet">
<link href="css\jquery-ui.css" type="text/css" rel="stylesheet">
<link href="css\mCustomScrollbar.min.css" type="text/css" rel="stylesheet">
<link href="css\select2.min.css" type="text/css" rel="stylesheet">
<link href="css\style.css" type="text/css" rel="stylesheet">
<link href="css\responsive.css" type="text/css" rel="stylesheet">
<title>EL EMEĞİ</title>
<script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-106310707-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
 gtag('config', 'UA-106310707-1', { 'anonymize_ip': true });
</script>
<script>
	
	var sc_project=11921154;
	var sc_security="6c07f98b";
		var scJsHost = (("https:" == document.location.protocol) ?
		"https://secure." : "http://www.");
			
document.write("<sc"+"ript src='" +scJsHost +"statcounter.com/counter/counter.js'></"+"script>");
</script>
</head>
<body>
<?php

if(!isset($_SESSION)) 
{ 
    session_start(); 
} 

if(isset($_SESSION["shoppingCart"])){
$shoppingCart=$_SESSION["shoppingCart"];

$total_count=$shoppingCart["summary"]["total_count"];
$toplam_fiyat=$shoppingCart["summary"]["toplam_fiyat"];
$shopping_products=$shoppingCart["products"];

}else{
    $total_count=0;
    $toplam_fiyat=0.0;
}
?>
<div id="preloader">
    <div class="loading_wrap">
        <img src="image\LOGOM.png" alt="logo">
    </div>
</div>
<header>
	<div class="header-top">
    	<div class="container">
        	<div class="row">
            	<div class="col-md-6">
                    <ul class="header_list text-md-left text-center">
                        <li><a href="tel:+ 00 123 456 789"><i class="fa fa-phone"></i>+ 00 123 456 789</a></li>
                        <li><a href="mailto:info@gmail.com"><i class="fa fa-envelope-o"></i>elemegi@gmail.com</a></li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <ul class="header_list text-md-right text-center">
                        <li><a href="yonetim/pages-signup.html" class="nav-link">Üye Ol</a>
                          
                        <li><a href="yonetim/index.html" class="nav-link">Oturum Aç</a></li>
                        <li><a href="istek.php">Dilek ve İstek</a></li>
                        <li> <a href="faq.php">Sorularınız</a></li>
                     
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="header-mdl">
    	<div class="container">
        	<div class="row">
            	<div class="col-md-12">
                	<div class="hm-inner d-sm-flex align-items-center justify-content-between">
                    	<div class="header-logo">
                        	<a href="index.php"><img src="image\LOGOM.png" alt="logo"></a>
                        </div>
                        <form action="index.php" class="header-form" method="$_POST">
                        <input class="search-box" name="search" placeholder="Ürün ara..." required="" value="" type="text">
                        <button type="submit">Arama</button>
                    </form>
                       <div class="header-right">
                        	<div class="header-cart">
                                <li>
                                <a href="order_process.php">
                                <span class="glyphicon glyphicon-shopping-cart">
                                <img src="image\cart-icon.png" alt="cart-icon">
                                </span>
                                    <span class="badge cart-count"></span>
                            </a>
</li>
                            </div>
                       </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
   
   
    <div class="header-btm">
   		<div class="container">
        	<div class="row">
            	<div class="col-md-12">
                	<nav class="navbar navbar-expand-lg navbar-light">
                    	<div class="header-logo">
                        	<a href="#"><img src="image\LOGOM.png" alt="logo"></a>
                        </div>
                      	<div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav">
                               
                                <li class="nav-item ">
                                	<a class="nav-link " href="index.php" >Anasayfa</a>
                                    
                                </li>
                                <li class="nav-item">
                                	<a class="nav-link" href="about-us.php">Hakkımızda</a>
                                </li>
                                
                                <li class="nav-item">
                                	<a class="nav-link" href="indexx.php">Alışveriş</a>
                                </li>
                                <li class="nav-item">
                                	<a class="nav-link" href="contact.html">İletişim</a>
                                </li>
                                <li>
                                <div class=" ml-auto ">
                                    <div class="menu-wrap position-relative">
                                        <button type="button" class="categories-btn btn-block">
                                            <i class="ion-ios-list-outline"></i><span>Kategoriler</span>
                                        </button>
                                        <nav id="mega-dropdown-menu" class="section-shadow">
                                         
                                          <div class="quantity-box-detail">
                                          <ul>
                            	<li><a href="indexx.php">Ahşap<span>(10)</span></a></li>
                                <li><a href="indexx.php">Tablo<span>(05)</span></a></li>
                                <li><a href="indexx.php">Bere<span>(15)</span></a></li>
                                <li><a href="indexx.php">Cam ve Porselen<span>(20)</span></a></li>
                                <li><a href="indexx.php">Aksesuar<span>(07)</span></a></li>
                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
</header>

<section class="breadcrumbs-section background_bg" data-img-src="arkaplan.jpg">
	<div class="container">
    	<div class="row justify-content-center">
        	<div class="col-md-12">
                <div class="page_title text-center">
                	<h1>Dilek ve İstek</h1>
                   
                </div>
            </div>
        </div>
    </div>
</section>
<section class="contact-inner-page pt_large ">
	<div class="container ">
    	<div class="row ">
        	<div class="col-lg-8 col-md-12">
            	<div class="contact-inputs">
                    <div class="title text-left ">
                        <h4>İsteyin Yapalım</h4>
                    </div>
                    <form method="post" name="enq" class="contact-form form-with-label">
                        <div class="input-1">
                            <label>İsminiz<span>*</span></label>
                            <input required="" class="form-control" id="first-name" placeholder="İsminizi Giriniz" value="" type="text">
                        </div>
                        <div class="input-2">
                            <label>Emailiniz<span>*</span></label>
                            <input required="" class="form-control" id="email" placeholder="Emailinizi Giriniz" value="" type="email">
                        </div>
                        <div class="input-3">
                            <label>Telefon Numaranız<span>*</span></label>
                            <input required="" class="form-control" id="phone" placeholder="Telefon Numaranızı Giriniz" value="" type="text">
                        </div>
                        <div class="input-4">
                            <label>Ürün<span>*</span></label>
                            <input required="" class="form-control" id="subject" placeholder="Ürününüzü Giriniz" value="" type="text">
                        </div>
                        <div class="input-5">
                            <label>istek<span>*</span></label>
                            <textarea required="" rows="3" class="form-control" id="description" placeholder="İsteğiniz"></textarea>
                        </div>
                        <div class="submit-btn">
                            <button type="submit" id="submitButton" class="btn btn-primary">Gönder</button>
                        </div>
                        <div class="col-md-12">
                            <div id="alert-msg" class="alert-msg text-center"></div>
                        </div>
                    </form>
                </div>
            </div>
            
        </div>
    </div>
</section>

<footer>
	<div class="footer-top">
    	<div class="container">
        	<div class="row">
            	<div class="col-lg-6 col-md-12 col-sm-12">
                	<div class="footer-box box-1">
                    	<h6 class="fb-title">Hakkımızda</h6>
                        <div class="fb-iner">
                        	<p>Birçok insan elinin değdiği birbirinden güzel el emeklerinin tüketicilerle buluşturulduğu bir alışveriş sitesidir.</p>
                        </div>
                    </div> 
                </div>
            	<div class="col-lg-6 col-md-6 col-sm-12 order-md-last">
                	<div class="footer-box box-4">
                    	<h6 class="fb-title">İletişim Bilgileri</h6>
                        <div class="fb-iner">
                        	<ul>
                            	<li><i class="ion-ios-location-outline"></i><p>Çelebiler Mah. 1415 Sok. No:13 Daire:8</p></li>
                                <li><i class="ion-ios-telephone-outline"></i><p>+025 2155 3255</p></li>
                                <li><i class="ion-ios-email-outline"></i><a href="#">elemegi@gmail.com</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
              
            </div>
        </div>
    </div>
    <div class="footer-btm">
    	<div class="container">
        	<div class="row">
            	<div class="col-md-6">
                	<div class="copyright">
                    	<p></p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="footer-social text-md-right">
                    	<ul>
                        
                        
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>


<a href="#" class="scrollup" style="display: none;"><i class="ion-ios-arrow-up"></i></a>

<script src="js\jquery.min.js" type="text/javascript"></script>
<script src="js\popper.min.js" type="text/javascript"></script>
<script src="js\bootstrap.min.js" type="text/javascript"></script>
<script src="js\jquery.magnific-popup.min.js" type="text/javascript"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD7TypZFTl4Z3gVtikNOdGSfNTpnmq-ahQ" type="text/javascript"></script>
<script src="js\owl.carousel.min.js" type="text/javascript"></script>
<script src="js\countdown.min.js" type="text/jscript"></script>
<script src="js\jquery.countup.js" type="text/javascript"></script>
<script src="js\waypoint.js" type="text/javascript"></script>
<script src="js\select2.min.js" type="text/javascript"></script>
<script src="js\jquery-price-slider.js" type="text/javascript"></script>
<script src='js\jquery.elevatezoom.js' type="text/javascript"></script>
<script src='js\imagesloaded.pkgd.min.js' type="text/javascript"></script>
<script src='js\isotope.min.js' type="text/javascript"></script>
<script src='js\jquery.fitvids.js' type="text/javascript"></script>
<script src="js\mCustomScrollbar.concat.min.js" type="text/javascript"></script>
<script src="js\custom.js" type="text/javascript"></script> 
</body>
</html>	