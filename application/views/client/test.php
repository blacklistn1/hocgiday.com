<!DOCTYPE html>
<html>
<head>
	<title>HTML</title>
</head>
<body>
<p id="01"></p>

<input type="number" id="page" name="page" value="">
<input type="button" id="load_item" name="load" value="Load Item" onclick="load_data()">

<script src="<?php echo themevender('')?>jquery-3.2.0.min.js"></script>

<script type="text/javascript" charset="utf-8" async>

	function load_data()
	{	
		$.ajax({
			url: '<?php echo base_url()?>test/recent_news_ajax',
			type: 'GET',
			dataType: 'json',
			data: {page: $('#page').val()}
		})
		.done(function(result) {
			$('#01').html(result);
		})
		.fail(function() {
			console.log("error");
		})
		.always(function() {
			console.log("complete");
		});
	}
</script>
</body>
</html>