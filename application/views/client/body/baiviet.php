
	<div id="body">
		<div id="useful" class="text-center frame">
			<h1><b>NHỮNG BÀI VIẾT HỮU ÍCH</b></h1>
			<div class="usefulItems layout">
				<div class="items30">
					<a href="<?php echo base_url() ?>bai-viet/danh-sach-bai-viet"><h1>DÀNH CHO HỌC VIÊN</h1></a>
					<img src="<?php echo themeimg('icons/student.png')?>" alt="" class="icon student">
					<p>Làm thế nào để học nhạc cụ hiệu quả nhất, dễ dàng nhất, và hài lòng nhất?</p>
					<a href="<?php echo base_url() ?>bai-viet/danh-sach-bai-viet"><i class="fa fa-angle-double-right" aria-hidden="true"></i>Xem các bài viết</a>
				</div>
			   
				<div class="items30">
					<a href="<?php echo base_url() ?>bai-viet/danh-sach-bai-viet"><h1>DÀNH CHO PHỤ HUYNH</h1></a>
					<img src="<?php echo themeimg('icons/parent.png')?>" alt="" class="icon parents">
					<p>Cách giúp con bạn có hứng thú với việc học nhạc hơn và tìm ra đam mê của mình</p>
					<a href="<?php echo base_url() ?>bai-viet/danh-sach-bai-viet"><i class="fa fa-angle-double-right" aria-hidden="true"></i>Xem các bài viết</a>
				</div>
			   
				<div class="items30">
					<a href="<?php echo base_url() ?>bai-viet/danh-sach-bai-viet"><h1>DÀNH CHO GIÁO VIÊN</h1></a>
					<img src="<?php echo themeimg('icons/teacher.png')?>" alt="" class="icon teacher">
					<p>Tổng hợp các bí quyết giảng dạy từ những giáo viên thành công trong ngành.</p>
					<a href="<?php echo base_url() ?>bai-viet/danh-sach-bai-viet"><i class="fa fa-angle-double-right" aria-hidden="true"></i>Xem các bài viết</a>
				</div>
			</div>
		</div><!--#USEFUL-->
	   
		<div id="popular" class="frame layout">
			<div class="items65 popular">
				<div class="swiper-container">
					<div class="swiper-wrapper">
					<?php foreach ($hot_news as $hot): ?>
						<div class="swiper-slide">
							<h1 class="heading"><b>Bài viết phổ biến</b></h1>
							<a href="<?php echo base_url('bai-viet/'.$hot->slug) ?>"><img src="<?php echo imgsrc($hot->thumbnail)?>" alt="<?php echo $hot->thumbnail_alt ?>" class="full-width big"></a>
							<!-- <a href=""><img src="" alt="" class="full-width small"></a> -->
							<div class="info">
								<a href="<?php echo base_url('bai-viet/'.$hot->slug) ?>"><h4><?php echo $hot->ten_bai_viet ?></h4></a>
								<?php $d = date_create($hot->ngay_dang) ?>
								<?php $date = date_format($d,"d/m/y") ?>
								<p class="comment"><span class="quantity"><?php echo $hot->so_luong_comments ?></span> bình luận - Đăng vào <span class="date"><?php echo $date ?></span></p>
								<p><span class="preview"><?php echo $hot->mo_ta_ngan ?></span><a href="<?php echo base_url('bai-viet/'.$hot->slug) ?>"><i class="fa fa-angle-double-right" aria-hidden="true"></i>Xem thêm</a></p>
							</div>
						</div>
						
					<?php endforeach; ?>
					</div>
				</div><!--swiper-container-->
				
				
			</div><!--.popular-->
			
			<div class="items30 sent text-center">
				<img src="<?php echo themeimg('icons/mail.png')?>" alt="" class="icon mail">
				<h3>Gửi bài viết cho chúng tôi</h3>
				<p>Rất nhiều chuyên gia đã giúp chúng tôi xây dựng trang bài viết này. Bạn có muốn đóng góp?</p>
				<form action="">
					<input type="email" name="" id="input" class="form-control text-center sharp" placeholder="Để lại địa chỉ Email" required="" title="">    
					<button type="submit" class="btn btn-default sharp">Gửi đi</button>
				</form>
			</div><!--.sent-->
			
	   </div><!--#POPULAR-->
	   
		<div id="news" class=" frame">
			<h1 class="text-center"><b>BÀI VIẾT MỚI NHẤT</b></h1>
			<div class="box layout">
			<?php foreach ($recent_news as $recent_new): ?>
			<?php $d = date_create($recent_new->ngay_dang) ?>
			<?php $date = date_format($d,"d/m/y") ?>
				<div class="items25">
					<a href="<?php echo base_url('bai-viet/'.$recent_new->slug) ?>"><img src="<?php echo imgsrc($recent_new->thumbnail)?>" alt="<?php echo $recent_new->thumbnail_alt ?>" class="full-width "></a>
					<div class="content">
						<a href="<?php echo base_url('bai-viet/'.$recent_new->slug) ?>"><h4><?php echo $recent_new->ten_bai_viet ?></h4></a>
						<p>Ngày <?php echo $date ?></p>
						<span class="reviews"><?php echo $recent_new->mo_ta_ngan ?></span><span class="more">Xem thêm</span>
					</div>
				</div>
			<?php endforeach; ?>
				
				<!-- <div class="pagination">
					<ul>
						<li class="first direction"><i class="fa fa-angle-double-left" aria-hidden="true"></i></li>
						<li class="prev direction"><i class="fa fa-angle-left" aria-hidden="true"></i></li>
						<li class="active number appear">1</li>
						<li class="number appear">2</li>
						<li class="number appear">3</li>
						<li class="number">4</li>
						<li class="number">5</li>
						<li class="number">6</li>
						<li class="number">7</li>
						<li class="number">8</li>
						<li class="next appear direction" ><i class="fa fa-angle-right" aria-hidden="true"></i></li>
						<li class="last appear direction"><i class="fa fa-angle-double-right" aria-hidden="true"></i></li>
					</ul>
				</div> -->
			</div>
	    </div>

	    
		<?php if (isset($docs)) {?>
		<div id="document" class="frame text-center">
			<h1><b>BẮT ĐẦU VỚI NHỮNG TÀI LIỆU MIỄN PHÍ SAU</b></h1>
			<div class="swiper-container">
				<div class="swiper-wrapper">
					<div class="swiper-slide">
						<div class="content">
							<img src="<?php echo themeimg('banner/3.4.jpg')?>" alt="" class='full-width'> 
							<h4><b>Tên tài liệu</b></h4>
							<p>Tóm tắt</p>
							<button type="submit" class="btn btn-default">Tải ngay</button>
						</div>
					</div>
					
					<div class="swiper-slide">
						<div class="content">
							<img src="<?php echo themeimg('banner/3.4.jpg')?>" alt="" class='full-width'> 
							<h4><b>Tên tài liệu</b></h4>
							<p>Tóm tắt</p>
							<button type="submit" class="btn btn-default">Tải ngay</button>
						</div>
					</div>
					
					<div class="swiper-slide">
						<div class="content">
							<img src="<?php echo themeimg('banner/3.4.jpg')?>" alt="" class='full-width'> 
							<h4><b>Tên tài liệu</b></h4>
							<p>Tóm tắt</p>
							<button type="submit" class="btn btn-default">Tải ngay</button>
						</div>
					</div>
					
					<div class="swiper-slide">
						<div class="content">
							<img src="<?php echo themeimg('banner/3.4.jpg')?>" alt="" class='full-width'> 
							<h4><b>Tên tài liệu</b></h4>
							<p>Tóm tắt</p>
							<button type="submit" class="btn btn-default">Tải ngay</button>
						</div>
					</div>
					
					<div class="swiper-slide">
						<div class="content">
							<img src="<?php echo themeimg('banner/3.4.jpg')?>" alt="" class='full-width'> 
							<h4><b>Tên tài liệu</b></h4>
							<p>Tóm tắt</p>
							<button type="submit" class="btn btn-default">Tải ngay</button>
						</div>
					</div>
					
					<div class="swiper-slide">
						<div class="content">
							<img src="<?php echo themeimg('banner/3.4.jpg')?>" alt="" class='full-width'> 
							<h4><b>Tên tài liệu</b></h4>
							<p>Tóm tắt</p>
							<button type="submit" class="btn btn-default">Tải ngay</button>
						</div>
					</div>
				</div>
			</div><!--swiper-container-->
			
			<!-- Add Arrows -->
			<div class="swiper-button-next"></div>
			<div class="swiper-button-prev"></div>
		</div><!--DOCUMENT-->
		<?php } ?>
		
	</div><!--#BODY-->
