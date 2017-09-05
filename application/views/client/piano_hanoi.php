<?php defined('BASEPATH') OR exit('No direct script acces allowed') ?>
<!DOCTYPE html>
<html lang="vi">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="học piano, học đánh piano, học đàn piano, học đánh đàn piano, học piano cơ bản, học piano tại Hà Nội, học đánh piano tại Hà Nội, học đàn piano tại Hà Nội, học đánh đàn piano tại Hà Nội, học piano cơ bản tại Hà Nội">
  	<meta name="description" content="Học Piano Dễ Dàng Với 30+ Giáo Viên Tốt Nhất Sống Quanh Bạn Tại Hà Nội">
	<title><?php echo $title ?> | Học Gì Đây?</title>
	<link rel="icon" type="image/x-icon" href="<?php echo imgsrc('x-icon.jpg') ?>">

	<!-- Google Tag Manager -->
	<script>
		(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
		new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
		j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
		'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
		})(window,document,'script','dataLayer','GTM-KHS4KLP');
	</script>
	<!-- End Google Tag Manager -->

	<!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700|Monteserrat:500,700" rel="stylesheet">

	<!-- Font Awesome CDN -->
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

	<!-- Bootstrap CSS -->
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">

	<!-- JQuery UI -->
	<link rel="stylesheet" type="text/css" href="<?php echo clientjs('jquery-ui.smoothness/jquery-ui.css') ?>">

	<link rel="stylesheet" href="<?php echo themecss('index.css') ?>" media="screen" >
	<link rel="stylesheet" href="<?php echo themecss('footer.css') ?>" media="screen" >
	<link rel="stylesheet" href="<?php echo themecss('header.css') ?>" media="screen" >
	<link rel="stylesheet" href="<?php echo themecss('style.css') ?>" media="screen" >
	<link rel="stylesheet" href="<?php echo themecss('addClass.css') ?>" media="screen" >
	<link rel="stylesheet" href="<?php echo themecss('responsive.css') ?>" media="screen" >
	<link rel="stylesheet" href="<?php echo themevender('animate.css') ?>" media="screen" >
	<link rel="stylesheet" href="<?php echo themevender('swiper.min.css')?>" media="screen" >
	<link rel="stylesheet" href="<?php echo themevender('ion.rangeSlider.css')?>" media="screen" >

	<!-- MY style -->
	<link rel="stylesheet" type="text/css" href="<?php echo clientcss('style.css') ?>">

	<style type="text/css" media="screen">

	</style>
	<!-- Hotjar Tracking Code for www.hocgiday.com/ -->
	<script>
		(function(h,o,t,j,a,r){
			h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
			h._hjSettings={hjid:569211,hjsv:5};
			a=o.getElementsByTagName('head')[0];
			r=o.createElement('script');r.async=1;
			r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
			a.appendChild(r);
		})(window,document,'//static.hotjar.com/c/hotjar-','.js?sv=');
	</script>


	<!-- Google Analytics Tracking Code for Piano -->
	<script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

		ga('create', 'UA-85357957-2', 'auto');
		ga('send', 'pageview');
	</script>
		
</head>
<body onresize ="fixResponsive()">
	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KHS4KLP"
	height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->

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
                            <li><a href="#">Hà Nội</a></li>
                            <li><a href="#">Đà Nẵng</a></li>
                            <li><a href="#">Sài Gòn</a></li>
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


<!-- Profile List -->
<div class="container hgd-container">

	<?php foreach($result as $rec) {?>

	<!-- Profile row -->
	<?php $tuition = ($rec->hoc_phi_tai_nha != 0) ? $rec->hoc_phi_tai_nha : $rec->hoc_phi_tai_lop ?>
	<div class="container-fluid hgd-profile-box <?php echo $rec->districttag ?>" data-price="<?php echo $tuition ?>">
		<div class="row hgd-profile ">
			<div class="d-flex align-self-stretch profile-column">
				<div class="col-xs-4 col-sm-3 col-md-2 col-lg-2 hgd-profile-info hgd-avatar">
					<img class="img-circle img-responsive center-block hgd-profile-avatar" src="<?php echo base_url('assets/img/teachers/piano/hoc_piano_voi_'.$rec->nametag.'.jpg') ?>" alt="<?php echo $rec->nametag ?>">
				</div>
			</div>
			<div class="d-flex align-self-stretch profile-column">
				<div class="col-xs-4 col-sm-6 col-md-6 col-lg-6 hgd-profile-info ">
				<h3 id="<?php echo $rec->nametag ?>"><?php echo $rec->full_name ?></h3>
				<p>Địa chỉ: <?php echo $rec->dia_chi_nha ?></p>
				</div>
			</div>
			<div class="d-flex align-self-stretch profile-column">
				<div class="col-xs-4 col-sm-3 col-md-2 col-lg-2 hgd-profile-info ">
					<h3 id="unit-price">Học phí</h3>
					<p class="unit-price"><?php echo $tuition ?>.000 đ/ <?php echo $rec->duration ?> phút</p>
					<h3 id="rating">Đánh Giá</h3>
					<div class="rating-star-box">
						<span>
						<?php for ($i = 1; $i <= $rec->rating; $i++) {?>
							<i class="fa fa-star" aria-hidden="true"></i>
						<?php } ?>
						<?php $rating_fill = 4 - $rec->rating ?>
						<?php for ($k = 0; $k <= $rating_fill; $k++) {?>
							<i class="fa fa-star-o" aria-hidden="true"></i>
						<?php } ?>
						</span>
						<span class="num-of-rates"><?php echo $rec->so_nguoi_danh_gia ?></span>
					</div>
				</div>
			</div>
			<div class="d-flex align-self-stretch profile-column">
				<div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 hgd-read-more <?php echo $rec->nametag ?>">
					<span class="read-more <?php echo $rec->nametag ?>">&gt;&gt; Tìm hiểu thêm</span>
				</div>
			</div>
		</div>

		<!-- Profile Detail -->
		<div class="row hgd-profile-detail">
			<div class="row">
				<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
					<p><span class="t-heading">Cấp độ giảng dạy</span></p>
				</div>
				<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 text-right">
					<p><?php echo $rec->trinh_do_giang_day ?></p>
				</div>
			</div>
			<!-- Description -->
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<h4>Vài nét về giáo viên</h4>
					<p><?php echo $rec->gioi_thieu ?></p>
				</div>
			</div>

			<!-- End description -->
			<!-- Left column at md and lg -->
			<div class="col-xs-12 col-sm-12 col-md-7 col-lg-7"> 
				<div class="row">
					<h4>Học vấn</h4>
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">	
						<p><?php echo $rec->hoc_van ?></p>
					</div>
					
				</div>
				<div class="row">
					<h4>Video</h4>
					<?php $video = ($rec->video != NULL) ? $rec->video : '' ?>
					<div class="col-xs-12 col-sm-12 col-md-11 col-lg-11 wrapper wrapper-iframe">
						<iframe class="wrapper-item wrapper-video" src="<?php echo $rec->video ?>" frameborder="0" allowfullscreen></iframe>
					</div>
				</div>	
			</div> <!-- End left column -->
			
			<!-- Right column at md and lg -->
			<div class="col-xs-12 col-sm-12 col-md-5 col-lg-5"> 
				
				<div class="row">
					<div class="col-xs-7 col-sm-7 col-md-7 col-lg-7">
						<h4>Phạm vi đi lại</h4>
					</div>
					<div class="col-xs-5 col-sm-5 col-md-5 col-lg-5 text-right">
						<p><?php echo $rec->pham_vi_di_lai ?>km</p>
					</div>
				</div>
				<div class="row">
					<h4>Học phí</h4>
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
						<p>Tại nhà</p>
					</div>
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 text-right">
					<?php if ($rec->hoc_phi_tai_nha != NULL) {?>
						<p><?php echo $rec->hoc_phi_tai_nha ?>.000 đ/ <?php echo $rec->duration ?> phút</p>
					<?php } else {?>
					<p></p>
					<?php } ?>
					</div>
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
						<p>Tại lớp</p>
					</div>
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 text-right">
					<?php if ($rec->hoc_phi_tai_lop != NULL) {?>
						<p><?php echo $rec->hoc_phi_tai_lop ?>.000 đ/ <?php echo $rec->duration ?> phút</p>
					<?php } else {?>
					<p></p>
					<?php } ?>
					</div>
				</div>
				<div class="row">
					<h4>Lịch giảng dạy của giáo viên</h4>
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<?php echo $rec->lich_giang_day ?>
					<span class="legend"></span> : Những buổi giáo viên có thể giảng dạy 	
					</div>
				</div>
				<div class="row sign-up">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<button class="btn btn-info btn-lg btn-sign-up center-block dang-ky-ngay" data-toggle="modal" data-target="#myModal" rel="<?php echo $rec->nametag ?>">Đăng ký ngay</button>
					</div>
				</div>
			</div>
		</div> <!-- End Profile detail -->
	</div> <!-- End Profile row --> 
	<?php } ?>

	<!-- Basic pagination -->
	<?php if ($total_pages > 1): ?>
	<ul class="pagination pagination-lg">
	<?php if ($cur_page > 1): ?>
		<li><a href="<?php echo base_url('piano/ha-noi/1') ?>" title="">&lt;&lt;</a></li>
		<li><a href="<?php echo base_url('piano/ha-noi/'.($cur_page-1)) ?>" title="">&lt;</a></li>
	<?php endif; ?>

	<?php for ($i = $min_page; $i <= $max_page; $i++) {?>
		<?php if ($i == $cur_page) {?>
		<li class="active"><a href="<?php echo base_url('piano/ha-noi/'.$i) ?>"><?php echo $i ?></a></li>
		<?php } else { ?>
		<li><a href="<?php echo base_url('piano/ha-noi/'.$i) ?>"><?php echo $i ?></a></li>
		<?php } ?>
	<?php } ?>

	<?php if ($cur_page < $total_pages): ?>
		<li><a href="<?php echo base_url('piano/ha-noi/'.($cur_page+1)) ?>">&gt;</a></li>
		<li><a href="<?php echo base_url('piano/ha-noi/'.$total_pages) ?>">&gt;&gt;</a></li>
	<?php endif; ?>
	</ul>
	<?php endif; ?>
	<!-- End basic pagination -->

<div class="container">
	<!-- Modal -->
	<div class="modal fade" id="myModal" role="dialog">
		<div class="modal-dialog">		
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">					
					<h3 class="modal-title" id="tName"></h3> 
				</div>
				<div class="modal-body">
					<form action="<?php echo base_url() ?>piano/ha-noi" method="POST" role="form">
						<div class="form-group">
							<input type="text" name="fullname" class="form-control mailing-info" placeholder="Tên đầy đủ của bạn" required="required">
							<p><?php echo form_error('fullname') ?></p>
						</div>
						<div class="form-group">
							<input type="text" name="tel" class="form-control mailing-info" placeholder="Số điện thoại" required="required">
							<p><?php echo form_error('tel') ?></p>
						</div>
						<div class="form-group">
							<label>Bạn muốn học tại: </label>
							<label class="checkbox-inline"><input type="checkbox" name="learn-at[]" class="" checked="checked" value="Tại nhà"> Tại nhà</label>
							<label class="checkbox-inline"><input type="checkbox" name="learn-at[]" class="" checked="checked" value="Tại lớp"> Tại lớp</label>
							<p><?php echo form_error('learn-at[]') ?></p>
						</div>
						<div class="form-group">
							<label>Vào thời gian: </label><br>
							<label class="checkbox-inline"><input type="checkbox" name="learn-day[]" class="" checked="checked" value="T2"> T2</label>
							<label class="checkbox-inline"><input type="checkbox" name="learn-day[]" class="" checked="checked" value="T3"> T3</label>
							<label class="checkbox-inline"><input type="checkbox" name="learn-day[]" class="" checked="checked" value="T4"> T4</label>
							<label class="checkbox-inline"><input type="checkbox" name="learn-day[]" class="" checked="checked" value="T5"> T5</label>
							<label class="checkbox-inline"><input type="checkbox" name="learn-day[]" class="" checked="checked" value="T6"> T6</label>
							<label class="checkbox-inline"><input type="checkbox" name="learn-day[]" class="" checked="checked" value="T7"> T7</label>
							<label class="checkbox-inline"><input type="checkbox" name="learn-day[]" class="" checked="checked" value="CN"> CN</label>
						</div>
						<div class="form-group">
							<input type="hidden" name="teacher" id="chosen-teacher" class="form-control">
							<input type="hidden" name="subject" value="piano">
							<input type="hidden" name="city" value="Hà Nội">
						</div>
						<div class="modal-footer">
							<button name="send" type="submit" class="btn btn-primary btn-submit">Gửi đi</button>
						</div>
						<div>
							<a href="#" class="p-read-more" title="Thanh toán học phí như thế nào">&gt;&gt;&gt;Thanh toán học phí như thế nào?</a>
							<p class="p-read-more-content">Ở Học Gì Đây?, chúng tôi giúp bạn tập trung vào việc học tập bằng cách lo liệu cho việc đóng học phí của bạn. Bạn có thể dễ dàng chọn thanh toán trước theo các gói 5 buổi, 10 buổi hoặc 30 buổi học với giáo viên bạn đã lựa chọn.</p>
						</div>
						<div>
							<a href="#" class="p-read-more" title="">&gt;&gt;&gt;Chính sách đảm bảo hài lòng tại Học Gì Đây?</a>
							<p class="p-read-more-content">Sau khi học một hoặc một số buổi học, nếu bạn cảm thấy không hài lòng 100%, chúng tôi có thể giúp bạn tìm kiếm một giáo viên khác phù hợp hơn, hoặc hoàn trả lại <strong>TOÀN BỘ</strong> học phí các buổi học bạn đã thanh toán nhưng chưa học.<br>
							<strong>*Lưu ý:</strong> Yêu cầu về hoàn trả học phí phải được gửi trước buổi học tiếp theo ít nhất 24 giờ.
							</p>
						</div>
						<div>
							<a href="#" class="p-read-more" title="">&gt;&gt;&gt;Chưa tự tin về lựa chọn của mình?</a>
							<p class="p-read-more-content">Chúng tôi muốn bạn tự tin về quyết định của mình. Bạn có thể yêu cầu chúng tôi lập một danh sách các giáo viên phù hợp với yêu cầu của bạn và gửi riêng cho bạn vào Email <a href="<?php echo base_url() ?>yeucaugiaovien" title="">tại đây</a>. Hoàn toàn miễn phí.</p>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>

</div> <!-- End Profile list -->

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
                    <a href="https://www.facebook.com/hocgiday/"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                </div>
                <div class="social youtube">
                    <a href="https://www.youtube.com/channel/UCzOtVvQZ4dLakqa-Y0lLHwg"><i class="fa fa-youtube" aria-hidden="true"></i></a>
                </div>
                <div class="social google">
                    <a href="https://plus.google.com/u/1/b/110506048934264272362/?hl=vi"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                </div>
            </div>
        </div>

    </footer><!--FOOTER-->
</div>

<div id="copyright" class="text-center">
   <a href="https://www.hocgiday.com/dieu-khoan-su-dung/">Điều khoản sử dụng</a><br>
    2017 Copyright Học gì đây? All rights reversed
</div>


<script src="<?php echo themevender('')?>jquery-3.2.0.min.js"></script>
<!-- JQuery UI -->
<script src="<?php echo clientjs('jquery-ui.smoothness/jquery-ui.js') ?>" type="text/javascript" charset="utf-8"></script>	
<!-- Bootstrap JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<!--Vender-->
<script src="<?php echo themevender('')?>wow.min.js"></script>
<script src="<?php echo themevender('')?>swiper.min.js"></script>
<!-- Javascipt -->
<script src="<?php echo themejs('')?>index.js"></script>
<script src="<?php echo themejs('')?>function.js"></script>

<!-- MY script -->
<script src="<?php echo clientjs('app.js') ?>" type="text/javascript" charset="utf-8"></script>

</body>
</html>