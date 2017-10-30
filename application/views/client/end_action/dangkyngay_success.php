<?php defined('BASEPATH') OR exit('No direct script access allowed') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Đăng Ký Học Thành Công</title>
	<link rel="icon" type="image/x-icon" href="<?php echo imgsrc('x-icon.jpg') ?>">
	<style type="text/css" media="screen">
		body {
			font-family: sans-serif;
		}
		.button-block {
			display: block;
			margin: 50px 0;
		}
		a {
			padding: 15px;
			background-color: #f87311;
			color: white;
			text-decoration: none;
			border: 1px solid #f87311;
			border-radius: 4px;
			box-shadow: 3px 2px 1px grey;
			margin: 20px 0;
		}
		a:hover {
			color: white;
			background-color: #f82411;
		}
	</style>
</head>
<body>
<center><h1>Cảm ơn bạn đã đăng ký học với giáo viên <?php echo $teacher ?></h1></center>
<div class="button-block"><center><h3><a href="<?php echo base_url($uri) ?>">Tiếp tục tìm kiếm</a></h3></div></center>
</body>
</html>

