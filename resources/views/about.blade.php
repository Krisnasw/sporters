<!DOCTYPE html>
<html lang="en">
<head>
    <title>Sporter - Beli Peralatan Olahraga Murah dan Berkualitas</title>
    <meta name="format-detection" content="telephone=no">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link href="https://fonts.googleapis.com/css?family=Montserrat%7CRoboto:100,300,400,500,700,900%7CRoboto+Condensed:100,300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{!! asset('css/icon-font-linea.css') !!}">
    <link rel="stylesheet" type="text/css" href="{!! asset('css/bootstrap.min.css') !!}">
    <link rel="stylesheet" type="text/css" href="{!! asset('css/bootstrap-theme.min.css') !!}">
    <link rel="stylesheet" type="text/css" href="{!! asset('css/style.css') !!}">
    <link rel="stylesheet" type="text/css" href="{!! asset('css/effect.css') !!}">
    <link rel="stylesheet" type="text/css" href="{!! asset('css/font-awesome.min.css') !!}">
    <link rel="stylesheet" type="text/css" href="{!! asset('css/home.css') !!}">
    <link rel="stylesheet" type="text/css" href="{!! asset('css/owl.theme.default.css') !!}">
    <link rel="stylesheet" type="text/css" href="{!! asset('css/owl.carousel.min.css') !!}">
    <link rel="stylesheet" type="text/css" href="{!! asset('css/responsive.css') !!}">
</head>
<body>
	<!-- push menu-->
    <div class="pushmenu menu-home5">
        <div class="menu-push">
            <span class="close-left js-close"><i class="fa fa-times f-20"></i></span>
            <div class="clearfix"></div>
            <form role="search" method="get" id="searchform" class="searchform" action="/search">
                @csrf
                <div>
                    <label class="screen-reader-text" for="q"></label>
                    <input type="text" placeholder="Search for products" value="" name="q" id="q" autocomplete="off">
                    <input type="hidden" name="type" value="product">
                    <button type="submit" id="searchsubmit"><i class="ion-ios-search-strong"></i></button>
                </div>
            {!! Form::close() !!}
            <ul class="nav-home5 js-menubar">
                <li class="level1 active dropdown">
                    <a href="#">Home</a>
                </li>
                <li class="level1 active dropdown">
                    <a href="#">Shop</a>
                </li>
                <li class="level1">
                    <a href="#">Blog</a>
                </li>
            </ul>
        </div>
    </div>
    <!-- end push menu-->
    <!-- Menu Mobile -->
    <div class="menu-mobile-left-content menu-bg-white">
        <ul>
            <li><a href="#"><img src="img/icon_hot_gray.png" alt="Icon Hot Deals" /> <p>Hot Deals</p></a></li>
            <li><a href="#"><img src="img/icon_food_gray.png" alt="Icon Food" /> <p>Pakaian</p></a></li>
            <li><a href="#"><img src="img/icon_mobile_gray.png" alt="Icon Mobile & Tablet" /> <p>Raket</p></a></li>
            <li><a href="#"><img src="img/icon_electric_gray.png" alt="Icon Electric Appliances" /> <p>Sepatu</p></a></li>
            <li><a href="#"><img src="img/icon_computer_gray.png" alt="Icon Electronics & Technology" /> <p>Kaos Kaki</p></a></li>
            <li><a href="#"><img src="img/icon_fashion_gray.png" alt="Icon Fashion" /> <p>Shuttlecocks</p></a></li>
        </ul>
    </div>
	<!-- Header Box -->
	<div class="wrappage">
    @include('layouts.header')
	<!-- End Header Box -->
	<!-- Content Box -->
	<div class="relative full-width">
		<!-- Breadcrumb -->
		<div class="container-web relative">
			<div class="container">
				<div class="row">
					<div class="breadcrumb-web">
						<ul class="clear-margin">
							<li class="animate-default title-hover-red"><a href="#">Home</a></li>
							<li class="animate-default title-hover-red"><a href="#">About Us</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<!-- End Breadcrumb -->
		<!-- Content About Us -->
		<div class="relative container-web">
			<div class="container">
				<div class="row">
					<div class="col-md-10 text-intro relative top-margin-default bottom-margin-default">
						<p>Usaha kami bergerak di bidang perdagangan  yang menjual berbagai macam perlengkapan olahraga badminton yang pastinya cocok dengan selera masyarakat, khususnya untuk pengemar dan pencinta olahraga badminton.
								Untuk  pemasaran usaha ini,  kami membuka toko sendiri dan juga akan mempromosikan dan mendistribusikan produk kami melalui pasar tradisional maupun pasar modern yang mudah terjangkau oleh para pembeli atau konsumen.
								
								Dalam olahraga badminton pasti menggunakan peralatan dan perlengkapan untuk menunjang kegiatan olahraga tersebut seperti kostum olahraga baik baju, celana, raket, sepatu dan aksesoris lainnya yang dapat menunjang kegiatan olahraga tersebut</p>
					</div>
				</div>
			</div>
		</div>
		<!-- End Content About Us -->
		<!-- Support -->
		<div class=" support-box full-width bg-red support_box_v2">
			<div class="container-web">
				<div class=" container">
					<div class="row">
						<div class=" support-box-info relative col-md-3 col-sm-3 col-xs-6">
							<img src="img/icon_free_ship_white-min.png" alt="Icon Free Ship" class="absolute" />
							<p>free shipping</p>
							<p>on order over $500</p>
						</div>
						<div class=" support-box-info relative col-md-3 col-sm-3 col-xs-6">
							<img src="img/icon_support_white-min.png" alt="Icon Supports" class="absolute">
							<p>support</p>
							<p>life time support 24/7</p>
						</div>
						<div class=" support-box-info relative col-md-3 col-sm-3 col-xs-6">
							<img src="img/icon_patner_white-min.png" alt="Icon partner" class="absolute">
							<p>help partner</p>
							<p>help all aspects</p>
						</div>
						<div class=" support-box-info relative col-md-3 col-sm-3 col-xs-6">
							<img src="img/icon_phone_table_white-min.png" alt="Icon Phone Tablet" class="absolute">
							<p>contact with us</p>
							<p>+07 (0) 7782 9137</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Content Box -->
	<!-- Footer Box -->
	@include('layouts.footer')
</div>
	<!-- End Footer Box -->
    <script src="{!! asset('js/jquery-3.3.1.min.js') !!}" defer=""></script>
    <script src="{!! asset('js/bootstrap.min.js') !!}" defer=""></script>
    <script src="{!! asset('js/owl.carousel.min.js') !!}" defer=""></script>
    <script src="{!! asset('js/scripts.js') !!}" defer=""></script>
</body>
</html>