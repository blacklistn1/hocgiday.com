
<div class="container-fluid hgd-header">
	<div class="text-center hgd-header">
		<h1 id="h1" style="text-transform:uppercase">BẠN MUỐN HỌC <?php echo $subject_vn ?>?</h1>
		<h3 id="h3" style="text-transform:uppercase">LỰA CHỌN GIỮA HÀNG CHỤC GIÁO VIÊN <?php echo $subject_vn ?> TẠI <?php echo $city_vn ?></h3>
	</div>
</div>

<!-- Profile List -->
<div class="container hgd-container">

	<?php foreach($result as $row) {?>

	<!-- Profile row -->
	<?php $tuition = ($row->hoc_phi_tai_nha != 0) ? $row->hoc_phi_tai_nha : $row->hoc_phi_tai_lop ?>
	<div class="container-fluid hgd-profile-box <?php echo $row->districttag ?>" data-price="<?php echo $tuition ?>">
		<div class="row hgd-profile ">
			<div class="d-flex align-self-stretch profile-column">
				<div class="col-xs-4 col-sm-3 col-md-2 col-lg-2 hgd-profile-info hgd-avatar">
					<img class="img-circle img-responsive center-block hgd-profile-avatar" src="<?php echo base_url('assets/img/teachers/'.$subject.'/'.$row->avatar) ?>" alt="<?php echo $row->nametag ?>">
				</div>
			</div>
			<div class="d-flex align-self-stretch profile-column">
				<div class="col-xs-4 col-sm-5 col-md-5 hgd-profile-info ">
				<h3 id="<?php echo $row->nametag ?>" class="heading-small"><?php echo $row->full_name ?></h3>
				<p class="teacher-address">Địa chỉ: <?php echo $row->dia_chi_nha ?></p>
				</div>
			</div>
			<div class="d-flex align-self-stretch profile-column">
				<div class="col-xs-4 col-sm-4 col-md-3 hgd-profile-info ">
					<h3 id="unit-price" class="heading-small">Học phí</h3>
					<p class="unit-price"><?php echo $tuition ?>.000 đ/ <?php echo $row->duration ?> phút</p>
					<h3 id="rating" class="heading-small">Đánh Giá</h3>
					<div class="rating-star-box">
						<span>
						<?php for ($i = 1; $i <= 5; $i++) {?>
							<?php if ($i <= $row->rating) {?>
							<i class="fa fa-star" aria-hidden="true"></i>
							<?php } else { ?>
							<i class="fa fa-star-o" aria-hidden="true"></i>
							<?php } ?>
						<?php } ?>
						</span>
						<span class="num-of-rates"><?php echo $row->so_nguoi_danh_gia ?></span>
					</div>
				</div>
			</div>
			<div class="d-flex align-self-stretch profile-column">
				<div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 hgd-read-more <?php echo $row->nametag ?>">
					<span class="read-more <?php echo $row->nametag ?>">&gt;&gt; Tìm hiểu thêm</span>
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
					<p><?php echo $row->trinh_do_giang_day ?></p>
				</div>
			</div>
			<!-- Description -->
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<h4>Vài nét về giáo viên</h4>
					<p><?php echo $row->gioi_thieu ?></p>
				</div>
			</div>

			<!-- End description -->
			<!-- Left column at md and lg -->
			<div class="col-xs-12 col-sm-12 col-md-7 col-lg-7"> 
				<div class="row">
					<h4>Học vấn</h4>
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">	
						<p><?php echo $row->hoc_van ?></p>
					</div>
					
				</div>
				<div class="row">
					<h4>Video</h4>
					<?php $video = ($row->video != NULL) ? $row->video : '' ?>
					<div class="col-xs-12 col-sm-12 col-md-11 col-lg-11 wrapper wrapper-iframe">
						<iframe class="wrapper-item wrapper-video" src="<?php echo $row->video ?>" frameborder="0" allowfullscreen></iframe>
					</div>
				</div>	
			</div> <!-- End left column -->
			
			<!-- Right column at md and lg -->
			<div class="col-xs-12 col-sm-12 col-md-5 col-lg-5"> 
				
				<div class="row clearfix">
                    <div class="pull-left">
                        <h4>Phạm vi đi lại</h4>
                    </div>
					<div class="pull-right">
						<p><?php echo $row->pham_vi_di_lai ?>km</p>
					</div>
				</div>
				<div class="row">
					<h4>Học phí</h4>
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
						<p>Tại nhà</p>
					</div>
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 text-right">
					<?php if ($row->hoc_phi_tai_nha != NULL) {?>
						<p><?php echo $row->hoc_phi_tai_nha ?>.000 đ/ <?php echo $row->duration ?> phút</p>
					<?php } else {?>
					<p></p>
					<?php } ?>
					</div>
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
						<p>Tại lớp</p>
					</div>
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 text-right">
					<?php if ($row->hoc_phi_tai_lop != NULL) {?>
						<p><?php echo $row->hoc_phi_tai_lop ?>.000 đ/ <?php echo $row->duration ?> phút</p>
					<?php } else {?>
					<p></p>
					<?php } ?>
					</div>
				</div>
				<div class="row">
					<h4>Lịch giảng dạy của giáo viên</h4>
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 teacher-schedule">
						<?php echo $row->lich_giang_day ?>
					<span class="legend"></span> : Những buổi giáo viên có thể giảng dạy 	
					</div>
				</div>
				<div class="row sign-up">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<button class="btn btn-info btn-lg btn-sign-up center-block dang-ky-ngay" data-toggle="modal" data-target="#myModal" rel="<?php echo $row->nametag ?>">Đăng ký ngay</button>
					</div>
				</div>
			</div>
		</div> <!-- End Profile detail -->
	</div> <!-- End Profile row --> 
	<?php } ?>

	<!-- Pagination -->
	<?php if ($total_pages > 1): ?>
	<div class="pagination">
		<ul>
	
	<?php if ($cur_page > 1): ?>
		<li class="first direction appear"><a href="<?php echo base_url($uri.'?p=1') ?>"><i class="fa fa-angle-double-left" aria-hidden="true"></i></a></li>
		<li class="prev direction appear"><a href="<?php echo base_url($uri.'?p='.($cur_page-1)) ?>" title=""><i class="fa fa-angle-left" aria-hidden="true"></i></a></li>
	<?php endif; ?>

	<?php for ($i = $min_page; $i <= $max_page; $i++) {?>
		<?php if ($i == $cur_page) {?>
		<li class="active number appear"><a href="<?php echo base_url($uri.'?p='.$i) ?>"><?php echo $i ?></a></li>
		<?php } else { ?>
		<li class="number appear"><a href="<?php echo base_url($uri.'?p='.$i) ?>"><?php echo $i ?></a></li>
		<?php } ?>
	<?php } ?>

	<?php if ($cur_page < $total_pages): ?>
		<li class="next appear direction" ><a href="<?php echo base_url($uri.'?p='.($cur_page+1)) ?>"><i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
		<li class="last appear direction"><a href="<?php echo base_url($uri.'?p='.$total_pages) ?>"><i class="fa fa-angle-double-right" aria-hidden="true"></i></a></li>
	<?php endif; ?>
	    </ul>
	</div>
	<?php endif; ?>
	<!-- End Pagination -->

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
						<form action="<?php echo base_url($uri) ?>" method="POST" role="form">
							<div class="form-group">
								<input type="text" name="fullname" class="form-control mailing-info" placeholder="Tên đầy đủ của bạn" required="required">
								<span class="form-error"><?php echo form_error('fullname') ?></span>
							</div>
							<div class="form-group">
								<input type="text" name="tel" class="form-control mailing-info" placeholder="Số điện thoại" required="required">
								<span class="form-error"><?php echo form_error('tel') ?></span>
							</div>
							<div class="form-group">
								<label>Bạn muốn học tại: </label>
								<label class="checkbox-inline"><input type="checkbox" name="learn-at[]" class="" checked="checked" value="Tại nhà"> Tại nhà</label>
								<label class="checkbox-inline"><input type="checkbox" name="learn-at[]" class="" checked="checked" value="Tại lớp"> Tại lớp</label>
								<span class="form-error"><?php echo form_error('learn-at[]') ?></span>
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
								<input type="hidden" name="subject" value="<?php  echo $subject_vn ?>">
								<input type="hidden" name="city" value="<?php echo $city_vn ?>">
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
								<p class="p-read-more-content">Chúng tôi muốn bạn tự tin về quyết định của mình. Bạn có thể yêu cầu chúng tôi lập một danh sách các giáo viên phù hợp với yêu cầu của bạn và gửi riêng cho bạn vào Email <a href="<?php echo base_url() ?>yeucaugiaovien" title="">tại đây</a>. Hoàn toàn miễn phí.</p>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

</div> <!-- End Profile list -->

