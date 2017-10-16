	<div class="container main-content list-view" id="">
		<center><h1>Danh sách bài viết</h1></center>
	<?php foreach($result as $rec): ?>
		<div class="row list-view-item">
			<a href="<?php echo base_url('bai-viet/'.$rec->slug) ?>"><h3 class="title"><?php echo $rec->ten_bai_viet ?></h3></a>
			<?php $d = date_create($rec->ngay_dang) ?>
			<?php $date = date_format($d, "d/m/y") ?>
			<small><span class="metadata">Đăng ngày: <?php echo $date ?> | Người đăng: <?php echo $rec->nguoi_dang ?></span></small><br>&nbsp;
			<p><?php echo $rec->mo_ta_ngan ?></p>
			<span class="find-out-more"><a href="<?php echo base_url('bai-viet/'.$rec->slug) ?>">&gt;&gt; Tìm hiểu thêm</a></span>
			<div class="news-tags">
			<?php $tags = explode(', ', $rec->tags) ?>
				<ul>
				<?php for($i = 0; $i < count($tags); $i++) {?>
					<li><a href=""><?php echo $tags[$i] ?></a></li>
				<?php } ?>
				</ul>
			</div>
			
		</div>
	<?php endforeach ?>

	<!-- Theme pagination -->
	<?php if ($total_pages > 1): ?>
	<div class="pagination">
		<ul>
			<?php if ($cur_page > 1): ?>
			<li class="first appear direction"><a href="<?php echo base_url('bai-viet/danh-sach-bai-viet?p=1') ?>" title=""><i class="fa fa-angle-double-left" aria-hidden="true"></i></a></li>
			<li class="prev appear direction"><a href="<?php echo base_url('bai-viet/danh-sach-bai-viet?p='.($cur_page-1)) ?>"><i class="fa fa-angle-left" aria-hidden="true"></i></a></li>
			<?php endif; ?>

			<?php for ($i = $min_page; $i <= $max_page; $i++) {?>
			<?php if ($i == $cur_page) {?>
				<li class="active number appear"><a href="<?php echo base_url('bai-viet/danh-sach-bai-viet?p='.$i) ?>"><?php echo $i ?></a></li>
				<?php } else { ?>
				<li class="number appear"><a href="<?php echo base_url('bai-viet/danh-sach-bai-viet?p='.$i) ?>"><?php echo $i ?></a></li>
				<?php } ?>
			<?php } ?>

			<?php if ($cur_page < $total_pages): ?>
			<li class="next appear direction"><a href="<?php echo base_url('bai-viet/danh-sach-bai-viet?p='.($cur_page+1)) ?>"><i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
			<li class="last appear direction"><a href="<?php echo base_url('bai-viet/danh-sach-bai-viet?p='.$total_pages) ?>"><i class="fa fa-angle-double-right" aria-hidden="true"></i></a></li>
			<?php endif; ?>
		</ul>
	</div>
	<?php endif; ?>
	<!-- End Theme pagination -->

	</div>