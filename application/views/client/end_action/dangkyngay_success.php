<?php defined('BASEPATH') OR exit('No direct script access allowed') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Đăng Ký Học Thành Công</title>
	<link rel="icon" type="image/x-icon" href="<?php echo imgsrc('x-icon.jpg') ?>">
	<style type="text/css" media="screen">
        @font-face {
            font-family: 'Montserrat';
            src: url("<?php echo font('Montserrat-Medium.ttf') ?>");
            font-weight: normal;
        }
        @font-face {
            font-family: 'Montserrat';
            src: url("<?php echo font('Montserrat-Bold.ttf') ?>");
            font-weight: bold;
        }
        @font-face {
            font-family: 'Open Sans';
            src: url("<?php echo font('OpenSans-Regular.ttf') ?>");
            font-weight: normal;
        }
		body {
			font-family: 'Open Sans', sans-serif;
		}
        h1, h2, h3, h4, h5, h6 {
            font-family: 'Montserrat', sans-serif;
            font-weight: bold;
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
        .center {
            text-align: center;
        }
	</style>
</head>
<body>
<h2 class="center">Cảm ơn bạn đã đăng ký với giáo viên <?php echo $this->session->flashdata('tname') ?></h2>

<div class="button-block">
    <h3 class="center"><a href="<?php echo base_url($this->session->flashdata('uri')) ?>">Tiếp tục tìm kiếm</a></h3>
</div>


</body>
</html>

