<?php defined('BASEPATH') OR exit('No direct script access allowed') ?>
<!DOCTYPE html>
<html lang="vi">
<head>
	<title><?php echo $title ?> | Học Gì Đây?</title>
	<meta charset="utf-8" lang="vi" http-equiv="content-type">
	<link rel="stylesheet" href="<?php echo themevender('normalize.min.css') ?>" media="screen" >
	<link rel="alternate" hreflang="vi" href="https://hocgiday.vn/" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/x-icon" href="<?php echo themeimg('logo.png') ?>">

	<!--CSS-->
	<link rel="stylesheet" href="<?php echo themevender('bootstrap.min.css') ?>">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="<?php echo clientcss('style.css') ?>">	
	<!--FONT-->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700|Monteserrat:500,700" rel="stylesheet">

	<link rel="stylesheet" href="<?php echo themevender('normalize.min.css') ?>" media="screen" >
	<link rel="stylesheet" href="<?php echo themecss('index.css')?>" media="screen" >
	<link rel="stylesheet" href="<?php echo themecss('footer.css')?>" media="screen" >
	<link rel="stylesheet" href="<?php echo themecss('header.css')?>" media="screen" >
	<link rel="stylesheet" href="<?php echo themecss('style.css')?>" media="screen" >
	<link rel="stylesheet" href="<?php echo themecss('addClass.css')?>" media="screen" >
	<link rel="stylesheet" href="<?php echo themecss('responsive.css')?>" media="screen" >
	<link rel="stylesheet" href="<?php echo themevender('animate.css')?>" media="screen" >
	<link rel="stylesheet" href="<?php echo themevender('swiper.min.css')?>" media="screen" >
	<link rel="stylesheet" href="<?php echo themevender('ion.rangeSlider.css')?>" media="screen" >
	<style type="text/css" media="screen">
		body {
			font-size: 16px;
		}
		ul {
			list-style-type: none;
			list-style-position: inside;
		}
		a {
			text-decoration: none;
			color: black;
		}
		a:hover {
			color: #f87311;
		}
	</style>
</head>
<body>
	<div id="header">
	    <div class="line1 layout frame0">
	        <div class="phone">
	            <a href="tel:+84944852366"><img src="<?php echo themeimg('icons/phone.png') ?>" alt=""> 094 485 23 66</a>
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
	                <a class="navbar-brand" href="<?php echo base_url() ?>"><img src="<?php echo themeimg('logo%20full.png') ?>" class="logo" alt=""></a>
	            </div>

	            <!-- Collect the nav links, forms, and other content for toggling -->
	            <div class="collapse navbar-collapse navbar-ex1-collapse">
	                <ul class="nav navbar-nav">
	                </ul>
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
	                    <li class="request"><a href="<?php echo base_url() ?>yeucaugiaovien" title=""><span><b>YÊU CẦU GIÁO VIÊN</b></span></a></li>
	                </ul>
	            </div><!-- /.navbar-collapse -->
	        </nav>
	    </div>
	    <div class="line3 layout frame0 scroll">
	        <div class="phone">
	            <a href="tel:+84944852366"><img src="<?php echo themeimg('icons/phone.png') ?>" alt=""> 094 485 23 66</a>
	        </div>
	        <div class="logo">
	            <a href="<?php echo base_url() ?>"><img src="<?php echo themeimg('logo_only.jpg') ?>" alt=""></a>
	        </div>
	        <div class="request">
	            <a href="<?php echo base_url() ?>yeucaugiaovien"><span><b>YÊU CẦU GIÁO VIÊN</b></span></a>
	        </div>
	    </div>
	</div><!--#MENU-->

	<div class="container main-content">
		<p>Chúng tôi yêu âm nhạc!!</p>
		<p>Chúng tôi làm cho việc tìm kiếm giáo viên nhạc Dễ Hơn Hẳn!!</p>
		<p>Sau hơn 1 năm thành lập, xây dựng và phát triển hệ thống. Chúng tôi nhận ra rằng việc giúp kết nối những người có nhu cầu học nhạc và dạy nhạc lại với nhau tạo cho chúng tôi niềm cảm hứng bất tận.</p>
		<p>Chúng tôi biết rằng hiện nay thật khó để tìm được một chỗ học nhạc phù hợp với nhu cầu, giá cả hợp lý, đa dạng chuyên môn… và nhiều vấn đề khác nữa. Nhiệm vụ của chúng tôi là giúp khách hàng tìm được đúng người thầy dạy nhạc một cách dễ dàng nhất.</p>
		<p>Chúng tôi cũng giúp những người nghệ sĩ có thể trang trải 1 phần cuộc sống bằng nghề dạy nhạc. Chúng tôi giúp họ xứng đạng nhận được những gì họ đã bỏ ra. 
		</p>
		<hr>
		<p>Và xin chào, hãy gặp gỡ đội ngũ của <a href="<?php echo base_url()?>" title="Học Gì Đây? | Học nhạc vói giáo viên bạn thích"><strong>Học Gì Đây?</strong></a></p>
		<blockquote>“The only way to do great work is to love what you do” – Steve Jobs</blockquote>
		<p>(tạm dịch: Cách duy nhất để làm nên những điều tuyệt vời là hãy yêu thích những gì bạn làm)</p>

		<img src="<?php echo imgsrc('vechungtoi.jpg') ?>" alt="vechungtoi" class="img-responsive">
		Từ trái qua phải:
		<ul>
			<li>Trung Duong – Human Resources Management</li>
			<li>Vuong Nguyen – Web App Development</li>
			<li>Bach Pham – Marketing Management</li>
			<li>Phong Nguyen – Social Management</li>
		</ul>

	</div>

    <div id="footer">
        <footer class="frame layout">
            <div class="items30">
                <h3>HƯỚNG DẪN</h3>
                <a href="<?php echo base_url() ?>bai-viet"><i class="fa fa-caret-right" aria-hidden="true"></i> Hướng dẫn học viên </a>
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
                <button class="text-center">DÀNH CHO GIÁO VIÊN</button>
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
    </div>

	<script src="<?php echo themevender('')?>jquery-3.2.0.min.js"></script>
	<script src="<?php echo themevender('')?>bootstrap.min.js"></script>
	<script src="<?php echo themevender('')?>wow.min.js"></script>
	<script src="<?php echo themevender('')?>swiper.min.js"></script>
	<!-- Javascipt -->
	<script src="<?php echo themejs('')?>index.js"></script>
	<script src="<?php echo themejs('')?>function.js"></script>
</body>
</html>