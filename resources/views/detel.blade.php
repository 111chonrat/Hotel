<!DOCTYPE html>
<html lang="en">

	<head>
		<!-- Meta -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<!-- SITE TITLE -->
		<title>index hotel</title>
		<!-- Latest Bootstrap min CSS -->
		<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
		<!-- Google Font -->
		<link href="https://fonts.googleapis.com/css?family=Lobster+Two:400,400i,700,700i" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet">
		<!-- Font Awesome CSS -->
		<link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
		<!--- owl carousel Css-->
		<link rel="stylesheet" href="assets/owlcarousel/css/owl.carousel.css">
		<link rel="stylesheet" href="assets/owlcarousel/css/owl.theme.css">
		<!-- venobox -->
		<link rel="stylesheet" href="assets/css/venobox.css" />
		<!-- animate CSS -->
		<link rel="stylesheet" href="assets/css/animate.css">
		<!-- Style CSS -->
		<link rel="stylesheet" href="assets/css/style.css">
		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->


		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<meta name="description" content="">
		<meta name="keywords" content="">
		<meta name="author" content="">

			<!-- Styles -->
			<!-- <link rel="stylesheet" href="assets/css/bootstrap.min.css">
			<link rel="stylesheet" href="assets/font-awesome-4.5.0/css/font-awesome.min.css">
			<link rel="stylesheet" href="assets/css/animate.min.css">
			<link rel="stylesheet" href="assets/css/animations.css"> -->
			<!-- <link rel="stylesheet" href="style.css"> -->
			<!--  Js -->
			<!-- <script src="assets/js/modernizr.custom.js"></script>
			<script src="assets/js/jquery-2.1.3.min.js"></script> -->

	</head>

    <body data-spy="scroll" data-offset="80">


		<!-- START PRELOADER -->
		<div class="preloader">
			<div class="status">
				<div class="status-mes"><h4>Hotel</h4></div>
			</div>
		</div>
		<!-- END PRELOADER -->

		<!-- START NAVBAR -->
		<div class="navbar navbar-default navbar-fixed-top menu-top">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="sr-only">Hotel 2</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<!-- <a href="index.html" class="navbar-brand"><img src="assets/img/logo.png" alt="logo"></a> -->
				</div>
				<div class="navbar-collapse collapse">
					<nav>
						<ul class="nav navbar-nav navbar-right">
						<li><a class="page-scroll" href="indexhotel">Home</a></li>
							<li><a class="page-scroll" href="#Hotel">Hotel</a></li>
							<li><a class="page-scroll" href="#contact">Contact</a></li>
							{{-- <li><a class="page-scroll" href="#">About</a></li> --}}
						</ul>
					</nav>
				</div>
			</div><!--- END CONTAINER -->
		</div>
		<!-- END NAVBAR -->

		<!-- START HOME -->
		<section id="Hotel" class="welcome-area">
			<div class="welcome-slider-area">
				<div id="welcome-slide-carousel" class="carousel slide carousel-fade" data-ride="carousel">
					<ol class="carousel-indicators carousel-indicators-slider">
						<li data-target="#welcome-slide-carousel" data-slide-to="0" class="active"></li>
						<li data-target="#welcome-slide-carousel" data-slide-to="1"></li>
						<li data-target="#welcome-slide-carousel" data-slide-to="2"></li>
					</ol>
					<div class="carousel-inner" role="listbox">
						<div class="item active">
							<div class="single-slide-item slide-1">
								<div class="single-slide-item-table">
									<div class="single-slide-item-tablecell">
										<div class="container">
											<div class="row">
												<div class="col-md-12">

													<!-- <div class="hero_img">
														<img src="assets/img/vintage-logo.png" class="img-responsive" alt=""/>
													</div> -->
													<!-- <h2>11111</h2>
													<p>222222</p> -->
													<!-- <a class="btn btn-default btn-light-bg page-scroll" href="#reservation">Explore</a> -->
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>
		</section>
        <!-- END  HOME DESIGN -->
		<br>
		<br>

        <section class="intro padding-top-50 padding-bottom-50">
	<div class="content">
		<div class="container">
			<div class="row">
				<div class="col-md-10 col-md-offset-1 text-center">
					<h2 class="introtext">{{$Rawdata->hotel_name}}</h2>
					<!-- <button type="button" class="btn-link" href="https://www.google.com/maps/dir/Current+Location/17.880692, 102.735306">ขอเส้นทาง</button> -->
					<!--h4><a class="btn-link" href="https://www.google.com/maps/dir/Current+Location/17.880692, 102.735306"> ขอเส้นทาง </a></h4-->
				</div>
			</div>
			<!-- row -->
		</div>
		<!-- .container -->
	</div>
	<!-- .content -->
    </section>
    <!-- AFTER INTRO Section -->

	<section class="afterintro padding-bottom-50">
	<div class="container">
		<div class="row">
			<div class="col-sm-4">
                <h2><a href="#">ความน่าสนใจ</a></h2>
                {{$Rawdata->detel}}

                {{-- Ploy Inn Hotel Nong Khai ตั้งอยู่ในจังหวัดหนองคาย ห่างจากตลาดท่าเสด็จ 300 ม. โรงแรมแห่งนี้ให้บริการที่พักพร้อมห้องอาหาร ที่จอดรถส่วนตัวฟรี จักรยานสำหรับใช้งานฟรีและเลานจ์ส่วนกลาง
                โรงแรมระดับ 3 ดาวนี้ให้บริการห้องพักปรับอากาศพร้อมห้องน้ำส่วนตัว อินเทอร์เน็ตไร้สาย (WiFi) ฟรี และสวนหย่อม
ห้องพักที่โรงแรมมีพื้นที่นั่งเล่นและโทรทัศน์จอแบนพร้อมช่องรายการดาวเทียม ห้องพักของ Ploy Inn Hotel Nong Khai มีตู้เสื้อผ้าและห้องน้ำที่ใช้ร่วมกัน --}}
			</div>
			<div class="col-sm-4">
				<h2><a href="#">ติดต่อ</a></h2>
				<ul class="col-sm-6 unstyle checklist">
                    <li>  {{$Rawdata->detel}} </li>
                    <li> {{$Rawdata->email}} </li>
                    <li> {{$Rawdata->tel}} </li>
					{{-- <li>Internet</li>
					<li>TV</li>
					<li>Breakfast</li>
					<li>Baby Sitting</li>
					<li>Restaurant</li>
					<li>Camping</li> --}}

			</div>

		</div>
	</div>
	</section>

	<!-- TESTIMONIALS & NEARBY Section -->
	{{-- <section class="margin-bottom-50">
	<div class="container">
		<div class="row">
			<div class="col-md-6 text-center">
				<h2>Guest Book</h2>
				<div class="carousel slide" data-ride="carousel" id="quote-carousel">
					<div class="carousel-inner text-center">
						<!-- Quote 1 -->
						<div class="item active">
							<div class="testimonial">
								<p>
									 Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate luminex.
								</p>
								<small>Someone famous</small>
							</div>
						</div>

					</div>
				</div>
			</div>
			<div class="col-md-6">
				<h2>Nearby</h2>
				<ul class="circlearrowlist unstyle">
					<li><b>Salt Lake</b> - Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.</li>
					<li><b>Mountain Rouli</b> - Duis aute irure dolor in reprehenderit in voluptate velit esse cillum.</li>
					<li><b>Zoo Park</b> - Our tour guide can take you. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
					<li><b>Night Club</b> - Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</li>
				</ul>
			</div>
		</div>
	</div>
	</section> --}}
    <br>
    <br>

		<!-- START FOOTER -->
		<div id="contact" class="footer">
			<div class="container">
				<div class="row">
					<div class="col-md-12 col-sm-12 col-xs-12 text-center wow zoomIn">
						<div class="footer_logo">
							<!-- <a href="index.html"><img src="assets/img/logo.png" alt="logo"></a> -->
						</div><!--- END FOOTER COPYRIGHT -->

						<div class="footer_social">
							<ul>
								<li><a class="f_facebook" href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a class="f_twitter" href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a class="f_google" href="#"><i class="fa fa-google-plus"></i></a></li>
								<li><a class="f_linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
								<li><a class="f_youtube" href="#"><i class="fa fa-youtube"></i></a></li>
								<li><a class="f_skype" href="#"><i class="fa fa-skype"></i></a></li>
							</ul>
						</div>
						<div class="copyright">
							<p>Copyright &copy; 2019 |    All Rights Reserved.</p>
						</div><!--- END FOOTER COPYRIGHT -->
					</div><!--- END COL -->
				</div><!--- END ROW -->
			</div><!--- END CONTAINER -->
		</div>
		<!-- END FOOTER -->

		<!-- Latest jQuery -->
			<script src="assets/js/jquery-1.12.4.min.js"></script>
		<!-- Latest compiled and minified Bootstrap -->
			<script src="assets/bootstrap/js/bootstrap.min.js"></script>
		<!-- modernizer JS -->
			<script src="assets/js/modernizr-2.8.3.min.js"></script>
		<!-- owl-carousel min js  -->
			<script src="assets/owlcarousel/js/owl.carousel.min.js"></script>
		<!-- stellar js -->
			<script src="assets/js/jquery.stellar.min.js"></script>
		<!-- countTo js -->
			<script src="assets/js/jquery.inview.min.js"></script>
		<!-- jquery venobox min js -->
			<script src="assets/js/venobox.min.js"></script>
		<!-- scrolltopcontrol js -->
			<script src="assets/js/scrolltopcontrol.js"></script>
		<!-- form-contact js -->
			<script src="assets/js/form-contact.js"></script>
		<!-- WOW - Reveal Animations When You Scroll -->
			<script src="assets/js/wow.min.js"></script>
		<!-- scripts js -->
			<script src="assets/js/scripts.js"></script>

    </body>
</html>
