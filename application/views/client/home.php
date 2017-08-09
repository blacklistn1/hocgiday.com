<!DOCTYPE html>
<html lang="vi">
<head>
	<title>Học Gì Đây? | Tìm kiém giáo viên dạy nhạc dễ hơn hẳn</title>
	<link rel="icon" type="image/x-icon" href="<?php echo base_url('assets/icon.ico') ?>">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="http://code.jquery.com/ui/1.9.2/jquery-ui.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

	<meta name="viewport" content="width=device-width" charset="utf-8">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php echo base_url('assets/admin/bootstrap/css/animate.css')?>">
	<link rel="stylesheet"  href="<?php echo base_url('')?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/client/dist/css/hgd_css/default_fontsizes.css')?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/client/dist/css/hgd_css/button_style.css')?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/client/dist/css/hgd_css/text_colors.css')?>">
</head>
<body>
<div class="container-fluid">
	<div class="row">
		<div class="col-lg-1 col-sm-1 col-md-1 col-xs-1">
		</div>
		<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
			<span class="pull-left" style="display: -webkit-inline-box;">
				<i class="fa fa-phone" aria-hidden="true"></i>
				<p id="contact-number"><font class="number_style small_font">0944852366</font></p>
			</span>
		</div>
		<div class="col-lg-3 col-sm-3 col-md-3 col-xs-3">
			<span class="pull-right">
				<button id="sign-in" class="button_nonbackground small_font"><?php echo $sign_in ?></button>
				<button id="register" class="button_nonbackground small_font"><?php echo $register ?> </button>
			</span>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-1 col-sm-1 col-md-1 col-xs-1">
		</div>
		<div class="col-lg-2 col-sm-2 col-md-2 col-xs-2">
			<span class="pull-left">
				<input type="image" class="image_responsive" name="hocgiday_dashboard" src="<?php echo base_url('/assets/admin/dist/img/Logo-Ngang-High_01.jpg')?>" onclick="window.location='<?php echo site_url("home/index");?>'">
			</span>
		</div>
		<div class="col-lg-9 col-sm-9 col-md-9 col-xs-9">
			<span class="pull-right">
				<div class="dropdown">
					<nav class="navbar navar-default" role="navigation">
						<div class="navbar-header">
							<button class="navbar-toggle" data-toggle="collapse" data-target="#menu1" type="button">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<div class="collapse navbar-collapse" id="menu1">
							<ul class="nav navbar-nav">
								<li><a class="default_text_color" href="<?php echo site_url("home/index")?>"><?php echo $dashboard ?></a></li>
								<li><a class="default_text_color" href="#"><?php echo $search_for_teacher ?></a></li>
								<li><a class="default_text_color" href="#"><?php echo $more_inf ?></a></li>
								<li><a class="default_text_color" href="#"><?php echo $are_you_teach ?></li>
							</ul>
						</div>
					</nav>
				</div>
			</span>
		</div>
	</div>
</div>
<script type="text/javascript" src="<?php echo base_url('assets/client/dist/js/dashboard.js')?>"></script>
</body>
</html>