<?php defined('BASEPATH') OR exit('no direct script access allowed') ?>
<!DOCTYPE html>
<html lang="vi">
<head>
	<title><?php echo $title ?> | Học Gì Đây?</title>
	<meta content="text/html">
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat|Open+Sans" rel="stylesheet">

	<!-- Font Awesome CDN -->
	<script src="https://use.fontawesome.com/d5eddf6cb3.js"></script>

	<!-- Bootstrap CSS -->
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
	
	<!-- Custom style -->
	<link rel="stylesheet" type="text/css" href="<?php echo clientcss('style.css') ?>">

	<style type="text/css" media="screen">
		button {
			font-family: 'Montserrat', sans-serif;
		}
	</style>
</head>
<body>

<div class="col-xs-12 col-sm-8 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-2 col-md-offset-3 col-lg-offset-3 reg-box">
	<form class="reg-form" action="<?php echo base_url() ?>dangkygiangday" method="POST" role="form">
		<legend>Đăng ký giảng dạy cùng Học Gì Đây?</legend>
		<h3>Thông tin bắt buộc</h3>

		<div class="form-group">
			<input name="fullname" type="text" class="form-control" placeholder="Tên đầy đủ">
			<span class="error"><?php echo form_error('fullname') ?></span>
		</div>
		<div class="form-group">
			<input name="tel" type="number" class="form-control" placeholder="Số điện thoại">
			<span class="error"><?php echo form_error('tel') ?></span>
		</div>
		<div class="form-group">
			<input name="email" type="email" class="form-control" placeholder="Email">
			<span class="error"><?php echo form_error('email') ?></span>
		</div>
		<div class="form-group">
			<input name="address" type="text" class="form-control" placeholder="Địa chỉ thường trú">
			<span class="error"><?php echo form_error('address') ?></span>
		</div>
		<div class="row">
			<div class="form-group">
				<div class="col-xs-12">
					<label for="subject_request[]">Bạn muốn kiểm tra năng lực giảng dạy nhạc cụ nào?</label>
				</div>
				<div class="col-xs-12 col-md-6">
					<div class="checkbox">
						<label>
							<input type="checkbox" name="subject_request[]" value="Guitar">
							Guitar
						</label>
					</div>
					<div class="checkbox">
						<label>
							<input type="checkbox" name="subject_request[]" value="Piano">
							Piano
						</label>
					</div>
					<div class="checkbox">
						<label>
							<input type="checkbox" name="subject_request[]" value="Thanh nhạc">
							Thanh nhạc
						</label>
					</div>
					<div class="checkbox">
						<label>
							<input type="checkbox" name="subject_request[]" value="Keyboard">
							Keyboard
						</label>
					</div>
					<div class="checkbox">
						<label>
							<input type="checkbox" name="subject_request[]" value="Violin">
							Violin
						</label>
					</div>
					<div class="checkbox">
						<label>
							<input type="checkbox" name="subject_request[]" value="Cajon">
							Cajon
						</label>
					</div>
				</div>
				<div class="col-xs-12 col-md-6">
					<div class="checkbox">
						<label>
							<input type="checkbox" name="subject_request[]" value="Trống">
							Trống
						</label>
					</div>
					<div class="checkbox">
						<label>
							<input type="checkbox" name="subject_request[]" value="Guitar bass">
							Guitar bass
						</label>
					</div>
					<div class="checkbox">
						<label>
							<input type="checkbox" name="subject_request[]" value="Đàn bầu">
							Đàn bầu
						</label>
					</div>
					<div class="checkbox">
						<label>
							<input type="checkbox" name="subject_request[]" value="Saxophone">
							Saxophone
						</label>
					</div>
					<div class="checkbox">
						<label>
							<input type="checkbox" name="subject_request[]" value="Đàn tranh">
							Đàn tranh
						</label>
					</div>
					<div class="checkbox">
						<label>
							<input type="checkbox" name="subject_request[]" value="Cello">
							Cello
						</label>
					</div>
				</div>
				<div class="col-xs-12">
					<span class="error"><?php echo form_error('subject_request[]') ?></span>
				</div>
			</div>
		</div>
		
		<hr>
		<div class="optional">
			<h3>Để chúng tôi hiểu rõ bạn hơn</h3>
			<div class="form-group">
				<label for="video">Video tác phẩm mà bạn tâm đắc nhất:</label>
				<input name="video" type="text" class="form-control" placeholder="Để link video tại đây">
			</div>
			<div class="form-group">
				<label for="about">Giới thiệu ngắn gọn về bản thân:</label>
				<textarea name="about" id="input" rows="10" class="form-control"></textarea>
			</div>			
		</div>
		
		<button name="register" type="submit" class="btn btn-warning btn-reg">Gửi đi</button>
	</form>	
</div>


<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.2.1.js"></script>
<!-- Bootstrap JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<!-- MY script -->
<script src="<?php echo clientjs('app.js') ?>" type="text/javascript" charset="utf-8"></script>

</body>
</html>
