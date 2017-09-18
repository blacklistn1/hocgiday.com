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
	<link rel="stylesheet" href="<?php echo themecss('footer.css')?>" media="screen" >
	<link rel="stylesheet" href="<?php echo themecss('header.css')?>" media="screen" >
	<link rel="stylesheet" href="<?php echo themecss('style.css')?>" media="screen" >
	<link rel="stylesheet" href="<?php echo themecss('addClass.css')?>" media="screen" >
	<link rel="stylesheet" href="<?php echo themecss('responsive.css')?>" media="screen" >
	<link rel="stylesheet" href="<?php echo themevender('animate.css')?>" media="screen" >
	<link rel="stylesheet" href="<?php echo themevender('swiper.min.css')?>" media="screen" >
	<link rel="stylesheet" href="<?php echo themevender('ion.rangeSlider.css')?>" media="screen" >
	<link rel="stylesheet" type="text/css" href="<?php echo clientcss('news_style.css') ?>">
	<title><?php echo $title ?> | Học Gì Đây?</title>

</head>

<body ontouchstart="">

	<div id="header">
		<div class="line1 layout frame0">
			<div class="phone">
				<a href="tel:+84944852366"><img src="<?php echo themeimg('icons/phone.png')?>" alt=""> 094 485 23 66</a>
			</div>
			<div class="log">
				<span><a href="<?php echo base_url() ?>tro-thanh-giao-vien"><b>Bạn là giáo viên?</b></a></span>
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
					<a class="navbar-brand" href="<?php echo base_url() ?>"><img src="<?php echo themeimg('logo%20full.png')?>" class="logo" alt=""></a>
				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse navbar-ex1-collapse">
					<form class="navbar-form navbar-left" role="search">
						<div class="form-group">
							<input type="text" class="form-control" placeholder="Search">
						</div>
					</form>
					<ul class="nav navbar-nav navbar-right">
						<li><a href="<?php echo base_url() ?>">TRANG CHỦ</a></li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">TÌM GIÁO VIÊN NHẠC<b class="caret"></b></a>
							<ul class="dropdown-menu">
							    <li><a href="<?php echo base_url() ?>guitar/ha-noi">Guitar</a></li>
							    <li><a href="<?php echo base_url() ?>piano/ha-noi">Piano</a></li>
							    <li><a href="<?php echo base_url() ?>thanhnhac/ha-noi">Thanh nhạc</a></li>
							</ul>
						</li>
						<li><a href="<?php echo base_url() ?>bai-viet">BÀI VIẾT</a></li>
						<li class="request"><span><a href="<?php echo base_url() ?>yeucaugiaovien">YÊU CẦU GIÁO VIÊN</a></span></li>
					</ul>
				</div><!-- /.navbar-collapse -->
			</nav>
		</div>
		<div class="line3 layout frame0 scroll">
			<div class="phone">
				<a href=""><img src="<?php echo themeimg('icons/phone.png')?>" alt=""> 094 485 23 66</a>
			</div>
			<div class="logo">
				<a href="<?php echo base_url() ?>"><img src="<?php echo themeimg('logo_only.jpg')?>" alt=""></a>
			</div>
			<div class="request">
				<span><a href="<?php echo base_url() ?>yeucaugiaovien"><b>YÊU CẦU GIÁO VIÊN</b></a></span>
			</div>
		</div>
	</div><!--#MENU-->

	<div class="container main-content list-view" id="">
		<center><h1>Danh sách bài viết</h1></center>
	<?php foreach($result as $rec): ?>
		<div class="row list-view-item">
			<a href="<?php echo base_url('bai-viet/'.$rec->slug) ?>"><h3 class="title"><?php echo $rec->ten_bai_viet ?></h3></a>
			<?php $d = date_create($rec->ngay_dang) ?>
			<?php $date = date_format($d, "d/m/y") ?>
			<small><span class="metadata">Đăng ngày: <?php echo $date ?> | Người đăng: <?php echo $rec->nguoi_dang ?></span></small><br>&nbsp;
			<p><?php echo $rec->mo_ta_ngan ?> <a href="<?php echo base_url('bai-viet/'.$rec->slug) ?>">&gt;&gt; Tìm hiểu thêm</a></p>
			<div class="news-tags">
			<?php $tags = explode(', ', $rec->tags) ?>
				<ul>
				<?php for($i = 0; $i < count($tags); $i++) {?>
					<li><a href=""><?php echo $tags[$i] ?></a></li>
				<?php } ?>
				</ul>
			</div>
			
		</div>
	<?php endforeach ?>

	<!-- Theme pagination -->
	<?php if ($total_pages > 1): ?>
	<div class="pagination">
		<ul>
			<?php if ($cur_page > 1): ?>
			<li class="first appear direction"><a href="<?php echo base_url('bai-viet/danh-sach-bai-viet/1') ?>" title=""><i class="fa fa-angle-double-left" aria-hidden="true"></i></a></li>
			<li class="prev appear direction"><a href="<?php echo base_url('bai-viet/danh-sach-bai-viet/'.($cur_page-1)) ?>"><i class="fa fa-angle-left" aria-hidden="true"></i></a></li>
			<?php endif; ?>

			<?php for ($i = $min_page; $i <= $max_page; $i++) {?>
			<?php if ($i == $cur_page) {?>
				<li class="active number appear"><a href="<?php echo base_url('bai-viet/danh-sach-bai-viet/'.$i) ?>"><?php echo $i ?></a></li>
				<?php } else { ?>
				<li class="number appear"><a href="<?php echo base_url('bai-viet/danh-sach-bai-viet/'.$i) ?>"><?php echo $i ?></a></li>
				<?php } ?>
			<?php } ?>

			<?php if ($cur_page < $total_pages): ?>
			<li class="next appear direction"><a href="<?php echo base_url('bai-viet/danh-sach-bai-viet/'.($cur_page+1)) ?>"><i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
			<li class="last appear direction"><a href="<?php echo base_url('bai-viet/danh-sach-bai-viet/'.$total_pages) ?>"><i class="fa fa-angle-double-right" aria-hidden="true"></i></a></li>
			<?php endif; ?>
		</ul>
	</div>
	<?php endif; ?>
	<!-- End Theme pagination -->

	</div>

	

	<div id="footer">
		<footer class="frame layout">
			<div class="items30">
				<h3>HƯỚNG DẪN</h3>
				<a href="<?php echo base_url() ?>bai-viet"><i class="fa fa-caret-right" aria-hidden="true"></i> Hướng dẫn học sinh </a>
				<a href="<?php echo base_url() ?>bai-viet"><i class="fa fa-caret-right" aria-hidden="true"></i> Hướng dẫn phụ huynh </a>
				<a href="<?php echo base_url() ?>bai-viet"><i class="fa fa-caret-right" aria-hidden="true"></i> Hướng dẫn giáo viên </a>
			</div>
			<div class="items30">
				<h3>TÌM HIỂU THÊM</h3>
				<a href="<?php echo base_url() ?>ve-chung-toi"><i class="fa fa-caret-right" aria-hidden="true"></i> Về chúng tôi</a>
				<a href="<?php echo base_url() ?>bai-viet"><i class="fa fa-caret-right" aria-hidden="true"></i> Bài viết</a>
				<a href="<?php echo base_url() ?>bai-viet"><i class="fa fa-caret-right" aria-hidden="true"></i> Câu hỏi thường gặp</a>
			</div>
			<div class="items30">
				<h3>GIẢNG DẠY CÙNG CHÚNG TÔI</h3>
				<p>Để lại thông tin để chúng tôi giúp bạn</p>
				<button class="text-center"><a href="<?php echo base_url() ?>tro-thanh-giao-vien" title="">DÀNH CHO GIÁO VIÊN</a></button>
				<h3>KẾT NỐI VỚI CHÚNG TÔI</h3>
				<div id="social" class="layout">
					<div class="social facebook">
						<a href="https://www.facebook.com/hocgiday/"><i class="fa fa-facebook" aria-hidden="true"></i></a>
					</div>
					<div class="social youtube">
						<a href="https://www.youtube.com/channel/UCzOtVvQZ4dLakqa-Y0lLHwg"><i class="fa fa-youtube" aria-hidden="true"></i></a>
					</div>
					<div class="social google">
						<a href="https://plus.google.com/110506048934264272362"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
					</div>
				</div>
			</div>

		</footer><!--FOOTER-->
	</div><!--#FOOTER-->
	
	
	<div id="copyright" class="text-center">
		<a href="<?php echo base_url() ?>dieu-khoan-su-dung">Điều khoản sử dụng</a><br>
		2017 Copyright Học gì đây? All rights reversed
	</div>
	
	<!--Vender-->
	<script src="<?php echo themevender('')?>jquery-3.2.0.min.js"></script>
	<script src="<?php echo themevender('')?>bootstrap.min.js"></script>
	<script src="<?php echo themevender('')?>wow.min.js"></script>
	<script src="<?php echo themevender('')?>swiper.min.js"></script>
	<script src="<?php echo themevender('')?>ion.rangeSlider.min.js"></script>
	<!-- Javascipt -->
	<script src="<?php echo themejs('')?>function.js"></script>
	<script src="<?php echo themejs('')?>pagination.js"></script>

</body>
</html>