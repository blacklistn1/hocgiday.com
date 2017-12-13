<!DOCTYPE html>
<html>
<head>
    <?php if (isset($is_home) && ($is_home == 0)) {$page_title .= " | Học Gì Đây?";} ?>
    <meta name="msvalidate.01" content="DE0BBF8600D036194F3CDE2080B8EC4C" />
    <meta charset="UTF-8" lang="vi" http-equiv="content-type">

    <!-- Google analytics tracking code -->
    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
        ga('create', 'UA-85357957-5', 'auto');
        ga('send', 'pageview');
    </script>
    <!-- End Google analytics tracking code -->
    <!-- Event snippet for Gửi đi conversion page
        In your html page, add the snippet and call gtag_report_conversion when someone clicks on the chosen link or button. -->
    <script>
        function gtag_report_conversion(url) {
            var callback = function () {
                if (typeof(url) != 'undefined') {
                    window.location = url;
                }
            };
            gtag('event', 'conversion', {
                'send_to': 'AW-872148788/JLKcCIiXhXkQtN7vnwM',
                'transaction_id': '',
                'event_callback': callback
            });
            return false;
        }
    </script>
    <!-- END Event snippet for Gửi đi conversion page
    In your html page, add the snippet and call gtag_report_conversion when someone clicks on the chosen link or button. -->
    <?php if (isset($meta_desc) && ($meta_desc != NULL)) {?>
        <meta name="description" content="<?php echo $meta_desc ?>">
        <meta property="og:description" content="<?php echo $meta_desc ?>">
    <?php } ?>
    <link rel="stylesheet" href="<?php echo themevender('normalize.min.css') ?>" media="screen" >
    <link rel="alternate" hreflang="vi" href="https://hocgiday.vn/" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:title" content="<?php echo $page_title; ?>">
    <?php if (isset($thumbnail)) {?>
        <meta property="og:image" content="<?php echo $thumbnail ?>">
    <?php } ?>
    <meta property="og:type" content="website">
    <?php if (isset($uri)) {?>
        <meta property="og:url" content="<?php echo base_url($uri) ?>">
    <?php } ?>
    <meta property="og:locale" content="en-US">
    <link rel="icon" type="image/x-icon" href="<?php echo themeimg('logo.png') ?>">

    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-KL4T6GD');</script>
    <!-- End Google Tag Manager -->
    <!-- Global site tag (gtag.js) - Google AdWords: 872148788 -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-872148788"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'AW-872148788');
    </script>
    <!-- End Global site tag (gtag.js) - Google AdWords: 872148788 -->

    <!-- Facebook Pixel Code -->
    <script>
        !function(f,b,e,v,n,t,s)
        {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
            n.callMethod.apply(n,arguments):n.queue.push(arguments)};
            if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
            n.queue=[];t=b.createElement(e);t.async=!0;
            t.src=v;s=b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t,s)}(window, document,'script',
            'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '496460187398641');
        fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
                   src="https://www.facebook.com/tr?id=496460187398641&ev=PageView&noscript=1"
        /></noscript>
    <!-- End Facebook Pixel Code -->

    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
        var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
        (function(){
            var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
            s1.async=true;
            s1.src='https://embed.tawk.to/59e42b134854b82732ff5bee/default';
            s1.charset='UTF-8';
            s1.setAttribute('crossorigin','*');
            s0.parentNode.insertBefore(s1,s0);
        })();
    </script>
    <!--End of Tawk.to Script-->

    <!--CSS-->
    <link rel="stylesheet" href="<?php echo themevender('bootstrap.min.css') ?>">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <!--FONT-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700|Monteserrat:500,700" rel="stylesheet">

    <link rel="stylesheet" href="<?php echo themecss('index.css') ?>" media="screen" >
    <link rel="stylesheet" href="<?php echo themecss('style.css') ?>" media="screen" >
    <link rel="stylesheet" href="<?php echo themecss('addClass.css') ?>" media="screen" >
    <link rel="stylesheet" href="<?php echo themecss('responsive.css') ?>" media="screen" >
    <link rel="stylesheet" href="<?php echo themevender('animate.css') ?>" media="screen" >
    <link rel="stylesheet" href="<?php echo themevender('swiper.min.css') ?>" media="screen" >
    <link rel="stylesheet" href="<?php echo themevender('ion.rangeSlider.css') ?>" media="screen" >
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo clientcss('style.css') ?>">

    <title><?php echo $page_title; ?></title>
</head>

<body ontouchstart="">
	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KL4T6GD"
	height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->
	<!-- Mouseflow Tracking code -->
    <script type="text/javascript">
        window._mfq = window._mfq || [];
        (function() {
            var mf = document.createElement("script");
            mf.type = "text/javascript"; mf.async = true;
            mf.src = "//cdn.mouseflow.com/projects/ad340e7b-7451-4a4c-b161-c580e9865916.js";
            document.getElementsByTagName("head")[0].appendChild(mf);
        })();
    </script>
    <!--End Mouseflow Tracking code -->

	<?php if (isset($has_header) && ($has_header == 1)) {?>
	<div id="header">
	    <div class="line1 layout frame0">
	        <div class="phone">
	            <?php if ((isset($phone)) and ($contact_active == 1)) {?>
	            <a href="tel:<?php echo $phone ?>"><img src="<?php echo themeimg('icons/phone.png') ?>" alt=""> <?php echo $phone_label ?></a>
	            <?php } ?>
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
	                <a class="navbar-brand"><img src="<?php echo themeimg('logo%20full.png') ?>" class="logo" alt=""></a>
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
	                    <?php if (isset($has_menu) && ($has_menu == 1)) {?>
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
	                    <?php } ?>
	                    <li><span class="btn-anchor"><a href="<?php echo base_url() ?>yeucaugiaovien" class="anchor-text">YÊU CẦU GIÁO VIÊN</a></span></li>
	                </ul>
	            </div><!-- /.navbar-collapse -->
	        </nav>
	    </div>
	    
	    <div class="line3 layout frame0 scroll">
	        <div class="phone">
	            <?php if ((isset($phone)) and ($contact_active == 1)) {?>
	            <a href="tel:<?php echo $phone ?>"><img src="<?php echo themeimg('icons/phone.png') ?>" alt=""> <?php echo $phone_label ?></a>
	            <?php } ?>
	        </div>
	        <div class="logo">
	            <a><img src="<?php echo themeimg('logo_only.jpg') ?>" alt=""></a>
	        </div>
	        <div class="request">
	            <span class="btn-anchor"><a href="<?php echo base_url() ?>yeucaugiaovien" class="anchor-text">YÊU CẦU GIÁO VIÊN</a></span>
	        </div>
	    </div>
	</div><!--#MENU-->
	<?php } ?>

<div class="container-fluid hgd-header">
	<div class="text-center hgd-header">
		<h1 id="h1" style="text-transform:uppercase">BẠN MUỐN HỌC <?php echo $subject_vn ?>?</h1>
		<h3 id="h3" style="text-transform:uppercase">LỰA CHỌN GIỮA HÀNG CHỤC GIÁO VIÊN <?php echo $subject_vn ?> TẠI <?php echo $city_vn ?></h3>
	</div>
</div>

<!-- Profile List -->
<div class="container hgd-container">

	<?php foreach($result as $row) {?>

	<!-- Profile row -->
	<?php $tuition = ($row->hoc_phi_tai_nha != 0) ? $row->hoc_phi_tai_nha : $row->hoc_phi_tai_lop ?>
	<div class="container-fluid hgd-profile-box <?php echo $row->districttag ?>" data-price="<?php echo $tuition ?>">
		<div class="row hgd-profile ">
			<div class="d-flex align-self-stretch profile-column">
				<div class="col-xs-4 col-sm-3 col-md-2 col-lg-2 hgd-profile-info hgd-avatar">
					<img class="img-circle img-responsive center-block hgd-profile-avatar" src="<?php echo base_url('assets/img/teachers/'.$subject.'/'.$row->avatar) ?>" alt="<?php echo $row->nametag ?>">
				</div>
			</div>
			<div class="d-flex align-self-stretch profile-column">
				<div class="col-xs-4 col-sm-5 col-md-5 hgd-profile-info ">
				<h3 id="<?php echo $row->nametag ?>" class="heading-small"><?php echo $row->full_name ?></h3>
				<p class="teacher-address">Địa chỉ: <?php echo $row->dia_chi_nha ?></p>
				</div>
			</div>
			<div class="d-flex align-self-stretch profile-column">
				<div class="col-xs-4 col-sm-4 col-md-3 hgd-profile-info ">
					<h3 id="unit-price" class="heading-small">Học phí</h3>
					<p class="unit-price"><?php echo $tuition ?>.000 đ/ <?php echo $row->duration ?> phút</p>
					<h3 id="rating" class="heading-small">Đánh Giá</h3>
					<div class="rating-star-box">
						<span>
						<?php for ($i = 1; $i <= 5; $i++) {?>
							<?php if ($i <= $row->rating) {?>
							<i class="fa fa-star" aria-hidden="true"></i>
							<?php } else { ?>
							<i class="fa fa-star-o" aria-hidden="true"></i>
							<?php } ?>
						<?php } ?>
						</span>
						<span class="num-of-rates"><?php echo $row->so_nguoi_danh_gia ?></span>
					</div>
				</div>
			</div>
			<div class="d-flex align-self-stretch profile-column">
				<div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 hgd-read-more <?php echo $row->nametag ?>">
					<span class="read-more <?php echo $row->nametag ?>">&gt;&gt; Tìm hiểu thêm</span>
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
					<p><?php echo $row->trinh_do_giang_day ?></p>
				</div>
			</div>
			<!-- Description -->
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<h4>Vài nét về giáo viên</h4>
					<p><?php echo $row->gioi_thieu ?></p>
				</div>
			</div>

			<!-- End description -->
			<!-- Left column at md and lg -->
			<div class="col-xs-12 col-sm-12 col-md-7 col-lg-7"> 
				<div class="row">
					<h4>Học vấn</h4>
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">	
						<p><?php echo $row->hoc_van ?></p>
					</div>
					
				</div>
				<div class="row">
					<h4>Video</h4>
					<?php $video = ($row->video != NULL) ? $row->video : '' ?>
					<div class="col-xs-12 col-sm-12 col-md-11 col-lg-11 wrapper wrapper-iframe">
						<iframe class="wrapper-item wrapper-video" src="<?php echo $row->video ?>" frameborder="0" allowfullscreen></iframe>
					</div>
				</div>	
			</div> <!-- End left column -->
			
			<!-- Right column at md and lg -->
			<div class="col-xs-12 col-sm-12 col-md-5 col-lg-5">

                <div class="row clearfix">
                    <div class="pull-left">
                        <h4>Phạm vi đi lại</h4>
                    </div>
                    <div class="pull-right">
                        <p><?php echo $row->pham_vi_di_lai ?>km</p>
                    </div>
                </div>
				<div class="row">
					<h4>Học phí</h4>
                    <?php if ($row->hoc_phi_tai_nha != NULL) {?>
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
						<p>Tại nhà</p>
					</div>
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 text-right">
						<p><?php echo $row->hoc_phi_tai_nha ?>.000 đ/ <?php echo $row->duration ?> phút</p>
					</div>
                    <?php } ?>
                    <?php if ($row->hoc_phi_tai_lop != NULL) {?>
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
						<p>Tại lớp</p>
					</div>
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 text-right">
						<p><?php echo $row->hoc_phi_tai_lop ?>.000 đ/ <?php echo $row->duration ?> phút</p>
					</div>
                    <?php } ?>
				</div>
				<div class="row">
					<h4>Lịch giảng dạy của giáo viên</h4>
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 teacher-schedule">
						<?php echo $row->lich_giang_day ?>
					<span class="legend"></span> : Những buổi giáo viên có thể giảng dạy 	
					</div>
				</div>
				<div class="row sign-up">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<button class="btn btn-info btn-lg btn-sign-up center-block dang-ky-ngay" data-toggle="modal" data-target="#myModal" rel="<?php echo $row->nametag ?>">Đăng ký ngay</button>
					</div>
				</div>
			</div>
		</div> <!-- End Profile detail -->
	</div> <!-- End Profile row --> 
	<?php } ?>

	<!-- Pagination -->
	<?php if ($total_pages > 1): ?>
	<div class="pagination">
		<ul>
	
	<?php if ($cur_page > 1): ?>
		<li class="first direction appear"><a href="<?php echo base_url($uri.'?p=1') ?>"><i class="fa fa-angle-double-left" aria-hidden="true"></i></a></li>
		<li class="prev direction appear"><a href="<?php echo base_url($uri.'?p='.($cur_page-1)) ?>" title=""><i class="fa fa-angle-left" aria-hidden="true"></i></a></li>
	<?php endif; ?>

	<?php for ($i = $min_page; $i <= $max_page; $i++) {?>
		<?php if ($i == $cur_page) {?>
		<li class="active number appear"><a href="<?php echo base_url($uri.'?p='.$i) ?>"><?php echo $i ?></a></li>
		<?php } else { ?>
		<li class="number appear"><a href="<?php echo base_url($uri.'?p='.$i) ?>"><?php echo $i ?></a></li>
		<?php } ?>
	<?php } ?>

	<?php if ($cur_page < $total_pages): ?>
		<li class="next appear direction" ><a href="<?php echo base_url($uri.'?p='.($cur_page+1)) ?>"><i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
		<li class="last appear direction"><a href="<?php echo base_url($uri.'?p='.$total_pages) ?>"><i class="fa fa-angle-double-right" aria-hidden="true"></i></a></li>
	<?php endif; ?>
	    </ul>
	</div>
	<?php endif; ?>
	<!-- End Pagination -->

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
						<form action="<?php echo base_url($uri) ?>" method="POST" role="form">
							<div class="form-group">
								<input type="text" name="fullname" class="form-control mailing-info" placeholder="Tên đầy đủ của bạn" required="required">
								<span class="form-error"><?php echo form_error('fullname') ?></span>
							</div>
							<div class="form-group">
								<input type="text" name="tel" class="form-control mailing-info" placeholder="Số điện thoại" required="required">
								<span class="form-error"><?php echo form_error('tel') ?></span>
							</div>
							<div class="form-group">
								<label>Bạn muốn học tại: </label>
								<label class="checkbox-inline"><input type="checkbox" name="learn-at[]" class="" checked="checked" value="Tại nhà"> Tại nhà</label>
								<label class="checkbox-inline"><input type="checkbox" name="learn-at[]" class="" checked="checked" value="Tại lớp"> Tại lớp</label>
								<span class="form-error"><?php echo form_error('learn-at[]') ?></span>
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
								<input type="hidden" name="subject" value="<?php echo $subject_vn ?>">
								<input type="hidden" name="city" value="<?php echo $city_vn ?>">
							</div>
							<div class="modal-footer">
								<button name="send" type="submit" class="btn btn-primary btn-submit" onclick="return gtag_report_conversion()" >Gửi đi</button>
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

<?php if ((isset($has_footer)) && ($has_footer == 1)) {?>
    <div id="footer">
        <footer class="frame layout">

            <div class="container-fluid">

                <div class="row">
                    <h3>CÁC CÂU HỎI THƯỜNG GẶP</h3>
                    <div>
                        <a class="p-read-more" title="Thanh toán học phí như thế nào">&gt;&gt;&gt;Thanh toán học phí như thế nào?</a>
                        <p class="p-read-more-content">Ở Học Gì Đây?, chúng tôi giúp bạn tập trung vào việc học tập bằng cách lo liệu cho việc đóng học phí của bạn. Bạn có thể dễ dàng chọn thanh toán trước theo các gói 5 buổi, 10 buổi hoặc 30 buổi học với giáo viên bạn đã lựa chọn.</p>
                    </div>
                    <div>
                        <a class="p-read-more" title="">&gt;&gt;&gt;Chính sách đảm bảo hài lòng tại Học Gì Đây?</a>
                        <p class="p-read-more-content">Sau khi học một hoặc một số buổi học, nếu bạn cảm thấy không hài lòng 100%, chúng tôi có thể giúp bạn tìm kiếm một giáo viên khác phù hợp hơn, hoặc hoàn trả lại <strong>TOÀN BỘ</strong> học phí các buổi học bạn đã thanh toán nhưng chưa học.<br>
                            <strong>*Lưu ý:</strong> Yêu cầu về hoàn trả học phí phải được gửi trước buổi học tiếp theo ít nhất 24 giờ.
                        </p>
                    </div>
                    <div>
                        <a class="p-read-more" title="">&gt;&gt;&gt;Chưa tự tin về lựa chọn của mình?</a>
                        <p class="p-read-more-content">Chúng tôi muốn bạn tự tin về quyết định của mình. Bạn có thể yêu cầu chúng tôi lập một danh sách các giáo viên phù hợp với yêu cầu của bạn và gửi riêng cho bạn vào Email <a href="<?php echo base_url() ?>yeucaugiaovien" title="">tại đây</a>. Hoàn toàn miễn phí.</p>
                    </div>
                </div>
                <div class="row">
                    <h3>ĐỊA CHỈ</h3>
                    <p>Tầng 5 tòa nhà LP20 ngõ 219 Trung Kính, quận Cầu Giấy, Hà Nội</p>
                </div>
            </div>
            <div class="items30">
            </div>
            <div class="items30">
            </div>
            &nbsp;
    </div>
        </footer><!--FOOTER-->
    </div>
<?php } ?>
    <div id="copyright" class="text-center">
        2017 Copyright Học gì đây? All rights reversed
    </div>

    <!--Vender-->
    <script
    src="<?php echo themevender('jquery-3.2.0.min.js') ?>"></script>
    <script src="<?php echo themevender('bootstrap.min.js') ?>"></script>
    <script src="<?php echo themevender('wow.min.js') ?>"></script>
    <script src="<?php echo themevender('swiper.min.js') ?>"></script>
    <script src="<?php echo themevender('ion.rangeSlider.min.js') ?>" type="text/javascript" charset="utf-8" async defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js" type="text/javascript" charset="utf-8"></script>
    <script src="<?php echo clientjs('') ?>zebra-pin/dist/zebra_pin.min.js"></script>
    <!-- Javascipt -->
    <script src="<?php echo themejs('')?>index.js"></script>
    <script src="<?php echo themejs('')?>function.js"></script>

    <!-- MY script -->
    <script src="<?php echo clientjs('app.js') ?>" type="text/javascript" charset="utf-8"></script>
<?php if (isset($is_page_mon_hoc) && ($is_page_mon_hoc == 1)): ?>
    
    <script>

    document.body.innerHTML = document.body.innerHTML.replace(/học guitar/i, 'học đánh đàn guitar');

    </script>
<?php endif ?>
</body>
</html>
