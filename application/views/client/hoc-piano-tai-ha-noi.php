<?php session_start(); ?>
<?php require_once 'connect_hostvn.php' ?>
<?php $_SESSION['subject'] = ''; ?>
<?php $citytag = 'hanoi'; ?>
<!DOCTYPE html>
<html lang="vi">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Tìm giáo viên Piano tại nhà hoặc tại lớp | Học Gì Đây?</title>

	<!-- Google Tag Manager -->
	<script>
		(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
		new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
		j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
		'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
		})(window,document,'script','dataLayer','GTM-KHS4KLP');
	</script>
	<!-- End Google Tag Manager -->

	<!-- Font Awesome CDN -->
	<script src="https://use.fontawesome.com/d5eddf6cb3.js"></script>

	<!-- Bootstrap CSS -->
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">

	<!-- JQuery UI -->
	<link rel="stylesheet" type="text/css" href="dist/js/jquery-ui.smoothness/jquery-ui.css">
	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat|Open+Sans" rel="stylesheet">

	<!-- MY style -->
	<link rel="stylesheet" type="text/css" href="dist/css/style.css">

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

<div class="container-fluid sticky" id="contact">
	<div class="row">
		<div class="col-xs-12 col-md-offset-1 contact">
			<i class="fa fa-phone fa-2x"></i>&nbsp;&nbsp;&nbsp;
			<span class="hgd-heading-highlight">Giải đáp thắc mắc: <a href="tel:0944852366">094 485 23 66</a></span>
		</div>
	</div>
</div>

<div class="container">
	<div class="row">
		<img src="img/Logo-Mobile.jpg" alt="hocgiday.vn" class="logo-xs">
		<img src="img/Logo-Tablet-Desktop.jpg" alt="hocgiday.vn" class="logo-md">
	</div>
	<div class="row">
	</div>
</div>

<div class="container-fluid hgd-header">
	<div class="text-center hgd-header">
		<h1 id="h1">BẠN MUỐN HỌC PIANO?</h1>
		<h3 id="h3">LỰA CHỌN GIỮA HÀNG CHỤC GIÁO VIÊN PIANO TẠI HÀ NỘI</h3>
	</div>
</div>



<!-- Slider filter -->
<div class="container-fluid slider-filter sticky">
	<div class="row">
		<div class="slider-container center-block" id="price-slider"></div>
	</div>
	<div class="row text-center slider-info">
		<label for="price">Khoảng học phí: </label>
		<input id="amount" type="text" name="price" value="" disabled="disabled" class="slider-amount"> đồng/h
	</div>
</div>

<!-- Profile List -->
<div class="container hgd-container">
<?php $sql = "SELECT * FROM teachers_piano WHERE `citytag` = '{$citytag}' ORDER BY `teachers_piano`.`rating` DESC, `teachers_piano`.`so_nguoi_danh_gia` DESC"; ?>
<?php $result = mysqli_query($conn,$sql) ?>
<?php if ($result != NULL) {?>
	<?php while($rec = mysqli_fetch_assoc($result)) {?>

	<!-- Profile row -->
	<?php $tuition = ($rec['hoc_phi_tai_nha'] != 0) ? $rec['hoc_phi_tai_nha'] : $rec['hoc_phi_tai_lop'] ?>
	<div class="container-fluid hgd-profile-box <?php echo $rec['districttag'] ?>" data-price="<?php echo $tuition ?>">
		<div class="row hgd-profile ">
			<div class="d-flex align-self-stretch profile-column">
				<div class="col-xs-4 col-sm-3 col-md-2 col-lg-2 hgd-profile-info hgd-avatar">
					<img class="img-circle img-responsive center-block hgd-profile-avatar" src="<?php echo $rec['avatar'] ?>" alt="<?php echo $rec['nametag'] ?>">
				</div>
			</div>
			<div class="d-flex align-self-stretch profile-column">
				<div class="col-xs-4 col-sm-6 col-md-6 col-lg-6 hgd-profile-info ">
				<h3 id="<?php echo $rec['nametag'] ?>"><?php echo $rec['full_name'] ?></h3>
				<p>Địa chỉ: <?php echo $rec['dia_chi_nha'] ?></p>
				</div>
			</div>
			<div class="d-flex align-self-stretch profile-column">
				<div class="col-xs-4 col-sm-3 col-md-2 col-lg-2 hgd-profile-info ">
					<h3 id="unit-price">Học phí</h3>
					<p class="unit-price"><?php echo $tuition ?>.000 đ/ <?php echo $rec['duration'] ?> phút</p>
					<h3 id="rating">Đánh Giá</h3>
					<div class="rating-star-box">
						<span>
						<?php for ($i = 1; $i <= $rec['rating']; $i++) {?>
							<i class="fa fa-star" aria-hidden="true"></i>
						<?php } ?>
						<?php $rating_fill = 4 - $rec['rating'] ?>
						<?php for ($k = 0; $k <= $rating_fill; $k++) {?>
							<i class="fa fa-star-o" aria-hidden="true"></i>
						<?php } ?>
						</span>
						<span class="num-of-rates"><?php echo $rec['so_nguoi_danh_gia'] ?></span>
					</div>
				</div>
			</div>
			<div class="d-flex align-self-stretch profile-column">
				<div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 hgd-read-more <?php echo $rec['nametag'] ?>">
					<span class="read-more <?php echo $rec['nametag'] ?>">&gt;&gt; Tìm hiểu thêm</span>
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
					<p><?php echo $rec['trinh_do_giang_day'] ?></p>
				</div>
			</div>
			<!-- Description -->
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<h4>Vài nét về giáo viên</h4>
					<p><?php echo $rec['gioi_thieu'] ?></p>
				</div>
			</div>

			<!-- End description -->
			<!-- Left column at md and lg -->
			<div class="col-xs-12 col-sm-12 col-md-7 col-lg-7"> 
				<div class="row">
					<h4>Học vấn</h4>
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">	
						<p><?php echo $rec['hoc_van'] ?></p>
					</div>
					
				</div>
				<div class="row">
					<h4>Video</h4>
					<?php $video = ($rec['video']!=NULL) ? $rec['video'] : '' ?>
					<div class="col-xs-12 col-sm-12 col-md-11 col-lg-11 wrapper wrapper-iframe">
						<iframe class="wrapper-item wrapper-video" src="<?php echo $rec['video'] ?>" frameborder="0" allowfullscreen></iframe>
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
						<p><?php echo $rec['pham_vi_di_lai'] ?>km</p>
					</div>
				</div>
				<div class="row">
					<h4>Học phí</h4>
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
						<p>Tại nhà</p>
					</div>
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 text-right">
					<?php if ($rec['hoc_phi_tai_nha'] != NULL) {?>
						<p><?php echo $rec['hoc_phi_tai_nha'] ?>.000 đ/ <?php echo $rec['duration'] ?> phút</p>
					<?php } else {?>
					<p></p>
					<?php } ?>
					</div>
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
						<p>Tại lớp</p>
					</div>
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 text-right">
					<?php if ($rec['hoc_phi_tai_lop'] != NULL) {?>
						<p><?php echo $rec['hoc_phi_tai_lop'] ?>.000 đ/ <?php echo $rec['duration'] ?> phút</p>
					<?php } else {?>
					<p></p>
					<?php } ?>
					</div>
				</div>
				<div class="row">
					<h4>Lịch giảng dạy của giáo viên</h4>
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<?php echo $rec['lich_giang_day'] ?>
					<span class="legend"></span> : Những buổi giáo viên có thể giảng dạy 	
					</div>
				</div>
				<div class="row sign-up">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<button class="btn btn-info btn-lg btn-sign-up center-block dang-ky-ngay" data-toggle="modal" data-target="#myModal" rel="<?php echo $rec['nametag'] ?>">Đăng ký ngay</button>
					</div>
				</div>
			</div>
		</div> <!-- End Profile detail -->
	</div> <!-- End Profile row --> 
	<?php } ?>
<?php } else { echo "Không tìm thấy kết quả nào";} ?>

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
					<form action="sendmail.php" method="POST" role="form">
						<div class="form-group">
							<input type="text" name="fullname" class="form-control mailing-info" placeholder="Tên đầy đủ của bạn" required="required">
						</div>
						<div class="form-group">
							<input type="text" name="tel" class="form-control mailing-info" placeholder="Số điện thoại" required="required">
						</div>
						<div class="form-group">
							<label>Bạn muốn học tại: </label>
							<label class="checkbox-inline"><input type="checkbox" name="learn-at[]" class="" checked="checked" value="Tại nhà"> Tại nhà</label>
							<label class="checkbox-inline"><input type="checkbox" name="learn-at[]" class="" checked="checked" value="Tại lớp"> Tại lớp</label>
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
							<p class="p-read-more-content">Chúng tôi muốn bạn tự tin về quyết định của mình. Bạn có thể yêu cầu chúng tôi lập một danh sách các giáo viên phù hợp với yêu cầu của bạn và gửi riêng cho bạn vào Email <a href="http://hocgiday.vn/yeu-cau-giao-vien.php" title="">tại đây</a>. Hoàn toàn miễn phí.</p>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>

</div> <!-- End Profile list -->

<!-- jQuery -->
<script
	src="https://code.jquery.com/jquery-3.2.1.js"
	integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
	crossorigin="anonymous">
</script>
<!-- JQuery UI -->
<script src="dist/js/jquery-ui.smoothness/jquery-ui.js" type="text/javascript" charset="utf-8"></script>	
<!-- Bootstrap JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<!-- MY script -->
<script src="dist/js/app.js" type="text/javascript" charset="utf-8"></script>
</body>
</html>
