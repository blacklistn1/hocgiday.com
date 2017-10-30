<!DOCTYPE html>
<html>
<head>
	<title>Chọn Thành phố</title>
	<style type="text/css" media="screen">
		body {
			font-family: sans-serif;
		}
		h1 {
			font-size: 4em;
		}
		.button-block {
			display: block;
			margin: 75px 0;
		}
		a {
			padding: 18px;
			background-color: #f87311;
			color: white;
			text-decoration: none;
			border: 1px solid #f87311;
			border-radius: 4px;
			box-shadow: 3px 2px 1px grey;
			font-weight: bold;
			font-size: 2em;
		}
		a:hover {
			color: white;
			background-color: #f82411;
		}
	</style>
</head>
<body>
<center><h1>Chọn thành phố của bạn</h1></center>
<div class="button-block"><center><a href="<?php echo base_url($subject.'/ha-noi/inbound') ?>">Hà Nội</a></center></div>
<div class="button-block"><center><a href="<?php echo base_url($subject.'/da-nang/inbound') ?>">Đà Nẵng</a></center></div>
<div class="button-block"><center><a href="<?php echo base_url($subject.'/tphcm/inbound') ?>">Thành phố Hồ Chí Minh</a></center></div>
</body>
</html>