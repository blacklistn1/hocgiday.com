<div id="body">
	<div class="hotro-post">
		<div class="container">
			<center><h1><b>BẠN CẦN TRỢ GIÚP ĐIỀU GÌ?</b></h1></center>
			<div class="col-xs-12 col-md-6">
				<h3>Dành cho giáo viên</h3>
				<?php foreach($for_teachers as $teachers_post) {?>
				<div class="row">
					<div class="col-xs-12">
						<a href="<?php echo base_url('hotro/'.$teachers_post->slug) ?>" ><h5><?php echo $teachers_post->page_title ?></h5></a>
					</div>
				</div>
				<?php } ?>
			</div>
			<div class="col-xs-12 col-md-6">
				<h3>Dành cho học viên</h3>
				<?php foreach($for_students as $students_post) {?>
				<div class="row">
					<div class="col-xs-12">
						<a href="<?php echo base_url('hotro/'.$students_post->slug) ?>" ><h5><?php echo $students_post->page_title ?></h5></a>
					</div>
				</div>
				<?php } ?>
			</div>
		</div>
	</div>
	
</div> <!-- #Body -->
