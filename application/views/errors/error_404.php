<?php defined('BASEPATH') OR exit('No direct script access allowed') ?>
<!DOCTYPE html>
<html lang="vi">
<head>
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

    <style type="text/css" media="screen">
    	ul {
    		list-style-type: none;
    		list-style-position: outside;
    	}
    	h1 {
    		font-size: 60px;
    		margin-top: 38px;
    		margin-bottom: 17px;
    	}
    	h4 {
    		font-size: 30px;
    	}
    	p, ul * {
    		margin: 17px 0;
    	}
    	p {
    		font-size: 24px;
    	}
    	ul * {
    		font-size: 20px;
    	}
    	.logo404 {
    		margin-bottom: 50px;
    		margin-top: 20px;
    		margin-left: 0;
    	}
    	a {
    		text-decoration: none;
    	}
    	a:hover {
    		text-decoration: underline;
    		color: #f87311;
    	}

    	@media screen and (max-width: 991px) {
    		h1, h4 {
    			text-align: center;
    		}
    		.header404 img {
    			width: 500px;
    			margin: 0 auto;
    		}
    	}
    </style>
    <!--FONT-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700|Monteserrat:500,700" rel="stylesheet">
    
    <title><?php echo $title ?></title>
</head>
<body>

	<div class="container">
		<div class="row logo404">
			<a href="<?php echo base_url() ?>"><img src="<?php echo imgsrc('') ?>Logo404.png" alt="Trang chủ"></a>
		</div>
		<div class="row">
			<div class="col-xs-12 col-md-5 col-md-push-7 header404">
				<img src="<?php echo imgsrc('Icon404.png') ?>" class="img-responsive">
			</div>
			<div class="col-xs-12 col-md-7 col-md-pull-5">
				<h1>Rất tiếc :(</h1>
				<h4>Trang bạn tìm kiếm hiện không tồn tại</h4>
				<hr>
				<p>Dưới đây là 1 số trang có thể hữu ích cho bạn</p>
				<ul>
					<li><a href="<?php echo base_url('') ?>" title="">Trang chủ</a></li>
					<li><a href="<?php echo base_url('') ?>bai-viet" title="">Bài viết</a></li>
					<li><a href="<?php echo base_url('') ?>guitar/ha-noi" title="">Chọn giáo viên Guitar</a></li>
					<li><a href="<?php echo base_url('') ?>piano/ha-noi" title="">Chọn giáo viên Piano</a></li>
					<li><a href="<?php echo base_url('') ?>thanhnhac/ha-noi" title="">Chọn giáo viên Thanh nhạc</a></li>
				</ul>
			</div>
		</div>

	</div>

	<script src="<?php echo themevender('')?>jquery-3.2.0.min.js"></script>
	<script src="<?php echo themevender('')?>bootstrap.min.js"></script>
</body>
</html>