<?php defined('BASEPATH') OR exit('No direct script access allowed') ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" lang="vi" http-equiv="content-type">
	<link rel="stylesheet" href="<?php echo themevender('normalize.min.css')?>" media="screen" >
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/x-icon" href="<?php echo imgsrc('x-icon.jpg') ?>">

	<!--CSS-->
	<link rel="stylesheet" href="<?php echo themevender('bootstrap.min.css')?>">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous"> 
	<!--FONT-->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700|Monteserrat:500,700" rel="stylesheet">
	
	<link rel="stylesheet" href="<?php echo themecss('index.css')?>" media="screen" >
	<link rel="stylesheet" href="<?php echo themecss('addClass.css')?>" media="screen" >
	<link rel="stylesheet" href="<?php echo themecss('responsive.css')?>" media="screen" >
	<link rel="stylesheet" href="<?php echo themecss('posts.css')?>" media="screen" >
	<link rel="stylesheet" href="<?php echo themevender('animate.css')?>" media="screen" >
	<link rel="stylesheet" href="<?php echo themevender('swiper.min.css')?>" media="screen" >
	<title>N's design</title>
</head>

<body ontouchstart="">
	<div id="header">
		<div class="line1 layout frame0">
		<div class="phone">
			<a href="tel:+84944852366"><img src="<?php echo themeimg('icons/phone.png')?>" alt=""> 094 485 23 66</a>
		</div>
		<div class="log">
			<span><a href=""><b>Bạn là giáo viên?</b></a></span>
		</div>
	</div>
		<div class="line2">
		<nav class="navbar navbar-default frame0" role="navigation">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#"><img src="<?php echo themeimg('logo%20full.png')?>" class="logo" alt=""></a>
			</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse navbar-ex1-collapse">
				<ul class="nav navbar-nav">
<!--
					<li class="active"><a href="#">Link</a></li>
					<li><a href="#">Link</a></li>
-->
				</ul>
				<form class="navbar-form navbar-left" role="search">
					<div class="form-group">
						<input type="text" class="form-control" placeholder="Search">
					</div>
				</form>
				<ul class="nav navbar-nav navbar-right">
					<li><a href="#">TRANG CHỦ</a></li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">TÌM GIÁO VIÊN NHẠC<b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="#">Hà Nội</a></li>
							<li><a href="#">Đà Nẵng</a></li>
							<li><a href="#">Sài Gòn</a></li>
						</ul>
					</li>
					<li><a href="#">BÀI VIẾT</a></li>
					<li class="request"><span><a href="">YÊU CẦU GIÁO VIÊN</a></span></li>
				</ul>
			</div><!-- /.navbar-collapse -->
		</nav>
		


	</div>
		<div class="line3 layout frame0 scroll">
		<div class="phone">
			<a href=""><img src="<?php echo themeimg('icons/phone.png')?>" alt=""> 094 485 23 66</a>
		</div>
		<div class="logo">
			<a href=""><img src="<?php echo themeimg('logo_only.jpg')?>" alt=""></a>
		</div>
		<div class="request">
			<span><a href=""><b>YÊU CẦU GIÁO VIÊN</b></a></span>
		</div>
	</div>
	</div><!--#MENU-->

	<div id="body">
	   <div id="useful" class="text-center frame">
		   <h1><b>NHỮNG BÀI VIẾT HỮU ÍCH</b></h1>
		   <div class="usefulItems layout">
			   <div class="items30">
				   <h1>DÀNH CHO HỌC VIÊN</h1>
				   <img src="<?php echo themeimg('icons/student.png')?>" alt="" class="icon student">
				   <p>Làm thế nào để học nhạc cụ hiệu quả nhất, dễ dàng nhất, và hài lòng nhất?</p>
				   <a href=""><i class="fa fa-angle-double-right" aria-hidden="true"></i>Xem các bài viết</a>
			   </div>
			   
			   <div class="items30">
				   <h1>DÀNH CHO PHỤ HUYNH</h1>
				   <img src="<?php echo themeimg('icons/parent.png')?>" alt="" class="icon parents">
				   <p>Cách giúp con bạn có hứng thú với việc học nhạc hơn và tìm ra đam mê của mình</p>
				   <a href=""><i class="fa fa-angle-double-right" aria-hidden="true"></i>Xem các bài viết</a>
			   </div>
			   
			   <div class="items30">
				   <h1>DÀNH CHO GIÁO VIÊN</h1>
				   <img src="<?php echo themeimg('icons/teacher.png')?>" alt="" class="icon teacher">
				   <p>Tổng hợp các bí quyết giảng dạy từ những giáo viên thành công trong ngành.</p>
				   <a href=""><i class="fa fa-angle-double-right" aria-hidden="true"></i>Xem các bài viết</a>
			   </div>
		   </div>
	   </div><!--#USEFUL-->
	   
	   <div id="popular" class="frame layout">
			<div class="items65 popular">
				<div class="swiper-container">
					<div class="swiper-wrapper">
						<div class="swiper-slide">
							<h1 class="heading"><b>Bài viết phổ biến</b></h1>
							<a href=""><img src="<?php echo themeimg('banner/3.1.jpg')?>" alt="" class="full-width big"></a>
							<a href=""><img src="<?php echo themeimg('banner/2.1.jpg')?>" alt="" class="full-width small"></a>
							<div class="info">
								<a href=""><h4>Tiêu đề bài viết</h4></a>
								<p class="comment"><span class="quantity">3</span> comments - Posted on <span class="date">18/4/2018</span></p>
								<p><span class="preview">Lorem ipsum dolor sit amet, consectetur adipisicing elit. A, atque.</span><a href=""><i class="fa fa-angle-double-right" aria-hidden="true"></i>Xem thêm</a></p>
							</div>
						</div>
						
						<div class="swiper-slide">
							<h1 class="heading"><b>Bài viết phổ biến</b></h1>
							<a href=""><img src="<?php echo themeimg('banner/3.1.jpg')?>" alt="" class="full-width big"></a>
							<a href=""><img src="<?php echo themeimg('banner/2.1.jpg')?>" alt="" class="full-width small"></a>
							<div class="info">
								<a href=""><h4>Tiêu đề bài viết</h4></a>
								<p class="comment"><span class="quantity">3</span> comments - Posted on <span class="date">18/4/2018</span></p>
								<p><span class="preview">Lorem ipsum dolor sit amet, consectetur adipisicing elit. A, atque.</span><a href=""><i class="fa fa-angle-double-right" aria-hidden="true"></i>Xem thêm</a></p>
							</div>
						</div>
						
						<div class="swiper-slide">
							<h1 class="heading"><b>Bài viết phổ biến</b></h1>
							<a href=""><img src="<?php echo themeimg('banner/3.1.jpg')?>" alt="" class="full-width big"></a>
							<a href=""><img src="<?php echo themeimg('banner/2.1.jp')?>g" alt="" class="full-width small"></a>
							<div class="info">
								<a href=""><h4>Tiêu đề bài viết</h4></a>
								<p class="comment"><span class="quantity">3</span> comments - Posted on <span class="date">18/4/2018</span></p>
								<p><span class="preview">Lorem ipsum dolor sit amet, consectetur adipisicing elit. A, atque.</span><a href=""><i class="fa fa-angle-double-right" aria-hidden="true"></i>Xem thêm</a></p>
							</div>
						</div>
					
					</div>
				</div><!--swiper-container-->
				
				
			</div><!--.popular-->
			
			<div class="items30 sent text-center">
				<img src="<?php echo themeimg('icons/mail.png')?>" alt="" class="icon mail">
				<h3>Gửi bài viết cho chúng tôi</h3>
				<p>Rất nhiều chuyên gia đã giúp chúng tôi xây dựng trang bài viết này. Bạn có muốn đóng góp?</p>
				<form action="">
					<input type="email" name="" id="input" class="form-control text-center sharp" placeholder="Để lại địa chỉ Email" required="" title="">    
					<button type="submit" class="btn btn-default sharp">Gửi đi</button>
				</form>
			</div><!--.sent-->
			
	   </div><!--#POPULAR-->
	   
	   <div id="news" class=" frame">
			<h1 class="text-center"><b>BÀI VIẾT MỚI NHẤT</b></h1>
			<div class="box layout">
				<div class="items25">
					<a href=""><img src="<?php echo themeimg('banner/3.2.jpg')?>" alt="" class="full-width "></a>
					<div class="content">
						<a href=""><h4>Tên bài viết</h4></a>
						<p>Ngày</p>
						<span class="reviews">" Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae ab, ullam consectetur quibusdam </span><span class="more">Xem thêm</span>
					</div>
				</div>
				
				<div class="items25">
					<a href=""><img src="<?php echo themeimg('banner/3.2.jpg')?>" alt="" class="full-width"></a>
					<div class="content">
						<a href=""><h4>Tên bài viết</h4></a>
						<p>Ngày</p>
						<span class="reviews">" Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae ab, ullam consectetur quibusdam </span><span class="more">Xem thêm</span>
					</div>
				</div>
				
				<div class="items25">
					<a href=""><img src="<?php echo themeimg('banner/3.2.jpg')?>" alt="" class="full-width"></a>
					<div class="content">
						<a href=""><h4>Tên bài viết</h4></a>
						<p>Ngày</p>
						<span class="reviews">" Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae ab, ullam consectetur quibusdam </span><span class="more">Xem thêm</span>
					</div>
				</div>
				
				<div class="pagination">
					<ul>
						<li class="first direction"><i class="fa fa-angle-double-left" aria-hidden="true"></i></li>
						<li class="prev direction"><i class="fa fa-angle-left" aria-hidden="true"></i></li>
						<li class="active number appear">1</li>
						<li class="number appear">2</li>
						<li class="number appear">3</li>
						<li class="number">4</li>
						<li class="number">5</li>
						<li class="number">6</li>
						<li class="number">7</li>
						<li class="number">8</li>
						<li class="next appear direction" ><i class="fa fa-angle-right" aria-hidden="true"></i></li>
						<li class="last appear direction"><i class="fa fa-angle-double-right" aria-hidden="true"></i></li>
					</ul>
				</div>
			</div>
	   </div>
	   
	   <div id="document" class="frame text-center">
		   <h1><b>BẮT ĐẦU VỚI NHỮNG TÀI LIỆU MIỄN PHÍ SAU</b></h1>
			<div class="swiper-container">
				<div class="swiper-wrapper">
					<div class="swiper-slide">
						<div class="content">
							<img src="<?php echo themeimg('banner/3.4.jpg')?>" alt="" class='full-width'> 
							<h4><b>Tên tài liệu</b></h4>
							<p>Tóm tắt</p>
							<button type="submit" class="btn btn-default">Tải ngay</button>
						</div>
					</div>
					
					<div class="swiper-slide">
						<div class="content">
							<img src="<?php echo themeimg('banner/3.4.jpg')?>" alt="" class='full-width'> 
							<h4><b>Tên tài liệu</b></h4>
							<p>Tóm tắt</p>
							<button type="submit" class="btn btn-default">Tải ngay</button>
						</div>
					</div>
					
					<div class="swiper-slide">
						<div class="content">
							<img src="<?php echo themeimg('banner/3.4.jpg')?>" alt="" class='full-width'> 
							<h4><b>Tên tài liệu</b></h4>
							<p>Tóm tắt</p>
							<button type="submit" class="btn btn-default">Tải ngay</button>
						</div>
					</div>
					
					<div class="swiper-slide">
						<div class="content">
							<img src="<?php echo themeimg('banner/3.4.jpg')?>" alt="" class='full-width'> 
							<h4><b>Tên tài liệu</b></h4>
							<p>Tóm tắt</p>
							<button type="submit" class="btn btn-default">Tải ngay</button>
						</div>
					</div>
					
					<div class="swiper-slide">
						<div class="content">
							<img src="<?php echo themeimg('banner/3.4.jpg')?>" alt="" class='full-width'> 
							<h4><b>Tên tài liệu</b></h4>
							<p>Tóm tắt</p>
							<button type="submit" class="btn btn-default">Tải ngay</button>
						</div>
					</div>
					
					<div class="swiper-slide">
						<div class="content">
							<img src="<?php echo themeimg('banner/3.4.jpg')?>" alt="" class='full-width'> 
							<h4><b>Tên tài liệu</b></h4>
							<p>Tóm tắt</p>
							<button type="submit" class="btn btn-default">Tải ngay</button>
						</div>
					</div>
					

				</div>
			</div><!--swiper-container-->
			<!-- Add Arrows -->
			<div class="swiper-button-next"></div>
			<div class="swiper-button-prev"></div>
	   </div><!--DOCUMENT-->
	   
		
	</div><!--#BODY-->
	

	<div id="footer">
		<footer class="frame layout">
			<div class="items30">
				<h3>HƯỚNG DẪN</h3>
				<a href=""><i class="fa fa-caret-right" aria-hidden="true"></i> Hướng dẫn học sinh </a>
				<a href=""><i class="fa fa-caret-right" aria-hidden="true"></i> Hướng dẫn phụ huynh </a>
				<a href=""><i class="fa fa-caret-right" aria-hidden="true"></i> Hướng dẫn giáo viên </a>
			</div>
			<div class="items30">
				<h3>Tìm hiểu thêm</h3>
				<a href=""><i class="fa fa-caret-right" aria-hidden="true"></i> Về chúng tôi</a>
				<a href=""><i class="fa fa-caret-right" aria-hidden="true"></i> Bài viết</a>
				<a href=""><i class="fa fa-caret-right" aria-hidden="true"></i> Câu hỏi thường gặp</a>
			</div>
			<div class="items30">
				<h3>GIẢNG DẠY CÙNG CHÚNG TÔI</h3>
				<p>Để lại thông tin để chúng tôi giúp bạn</p>
				<button class="text-center">DÀNH CHO GIÁO VIÊN</button>
				<h3>KẾT NỐI VỚI CHÚNG TÔI</h3>
				<div id="social" class="layout">
					<div class="social facebook">
						<a href=""><i class="fa fa-facebook" aria-hidden="true"></i></a>
					</div>
					<div class="social youtube">
						<a href=""><i class="fa fa-youtube" aria-hidden="true"></i></a>
					</div>
					<div class="social google">
						<a href=""><i class="fa fa-google-plus" aria-hidden="true"></i></a>
					</div>
				</div>
			</div>

		</footer><!--FOOTER-->
	</div><!--#FOOTER-->
	
	
	<div id="copyright" class="text-center">
	   <a href="https://www.hocgiday.com/dieu-khoan-su-dung/">Điều khoản sử dụng</a><br>
		2017 Copyright Học gì đây? All rights reversed
	</div>
	
	
	
	<!--Vender-->
	<script src="<?php echo themevender('')?>jquery-3.2.0.min.js"></script>
	<script src="<?php echo themevender('')?>bootstrap.min.js"></script>
	<script src="<?php echo themevender('')?>wow.min.js"></script>
	<script src="<?php echo themevender('')?>swiper.min.js"></script>
	<!-- Javascipt -->
	<script src="<?php echo themejs('')?>function.js"></script>
	<script src="<?php echo themejs('')?>pagination.js"></script>
</body>
</html>
