<!DOCTYPE html>
<html>
<head>
	<title>HTML</title>
	<style type="text/css" media="screen">
		body {
			font-family: sans-serif;
		}
		.button {
			background-color: #f87311;
			padding: 10px;
			color: white;
			text-decoration: none;
			border: 1px solid #f87311;
			border-radius: 6px;
			box-shadow: 3px 2px 1px black;
		}
		.button:hover {
			background-color: #f84e11;
		}
	</style>
</head>
<body>
<p id="01"></p>

<input type="number" id="page" name="page" value="">
<input type="button" id="load_item" name="load" value="Load Item" onclick="load_data()">

<a class="button" href="https://w3schools.com" title="">Click here</a>

<script src="<?php echo themevender('')?>jquery-3.2.0.min.js"></script>

</body>
</html>