<div class="container-fluid">
	<div class="col-xs-12 col-sm-8 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-2 col-md-offset-3 col-lg-offset-3 reg-box">
		<form class="reg-form" action="<?php echo base_url() ?>yeucaugiaovien" method="POST" role="form">
			<legend>Đăng ký học tại Học Gì Đây</legend>
			<h3>Phần bắt buộc</h3>
			<div class="form-group">
				<label for="">Môn bạn muốn đăng ký: </label>
				<span class="radio">
					<label>
						<input type="radio" name="subject" value="piano" id="chosen-piano" ">
						Piano
					</label>
				</span>
				<span class="radio">
					<label>
						<input type="radio" name="subject" value="guitar" id="chosen-guitar" >
						Guitar
					</label>
				</span>
				<span class="form-error"><?php echo form_error('subject') ?></span>
			</div>

			<div class="form-group">
				<input name="fullname" type="text" class="form-control" placeholder="Họ và tên người học" >
				<span class="form-error"><?php echo form_error('fullname') ?></span>
			</div>
			<div class="form-group">
				<input name="tel" type="number" class="form-control" placeholder="Số điện thoại liên lạc" >
				<span class="form-error"><?php echo form_error('tel') ?></span>
			</div>
			<hr>
			<div class="optional">
				<h3>Phần mở rộng</h3>
				<div class="form-group">
					<label for="learn-at" >Bạn muốn học tại: </label>
					<div class="checkbox">
						<label>
							<input type="checkbox" name="learn-at[]" value="Tại nhà">
							Tại nhà
						</label>
					</div>
					<div class="checkbox">
						<label>
							<input type="checkbox" name="learn-at[]" value="Tại lớp">
							Tại lớp
						</label>
					</div>
				</div>
				<div class="form-group">
					<label for="time">Vào thời gian: </label><br>
					<div class="checkbox">
						<label><input type="checkbox" name="time[]" value="Thứ 2"> Thứ 2</label>
					</div>
					<div class="checkbox">
						<label><input type="checkbox" name="time[]" value="Thứ 3"> Thứ 3</label>
					</div>
					<div class="checkbox">
						<label><input type="checkbox" name="time[]" value="Thứ 4"> Thứ 4</label>
					</div>
					<div class="checkbox">
						<label><input type="checkbox" name="time[]" value="Thứ 5"> Thứ 5</label>
					</div>
					<div class="checkbox">
						<label><input type="checkbox" name="time[]" value="Thứ 6"> Thứ 6</label>
					</div>
					<div class="checkbox">
						<label><input type="checkbox" name="time[]" value="Thứ 7"> Thứ 7</label>
					</div>
					<div class="checkbox">
						<label><input type="checkbox" name="time[]" value="Chủ nhật"> Chủ nhật</label>
					</div>
				</div>
				<div class="container-fluid slider-filter form-group">
					<label for="">Với mức học phí: </label>
					<div class="row">
						<div class="slider-container center-block" id="price-slider-reg"></div>
					</div>
					<div class="row text-center slider-info" id="slider-info">
						<input id="reg-amount" type="text" name="price" value="" disabled="disabled" class="slider-amount-reg"> đồng/h
						<input type="hidden" name="price-hidden" value="">
					</div>
				</div>
				<h4>Yêu cầu về giáo viên:</h4>
				<div class="form-group">
					<label for="gender">Giới tính: </label><br>
					<div class="checkbox">
						<label><input type="checkbox" name="gender[]" value="Nam"> Nam</label>
						<label><input type="checkbox" name="gender[]" value="Nữ"> Nữ</label>
					</div>
				</div>
				<div class="form-group">
					<label for="level">Trình độ:</label><br>
					<div class="checkbox">
						<label><input type="checkbox" name="level[]" value="Tiến sĩ"> Tiến sĩ</label>
					</div>
					<div class="checkbox">
						<label><input type="checkbox" name="level[]" value="Thạc sĩ"> Thạc sĩ</label>				
					</div>
					<div class="checkbox">
						<label><input type="checkbox" name="level[]" value="Đại học"> Đại học</label>
					</div>
					<div class="checkbox">
						<label><input type="checkbox" name="level[]" value="Trung cấp"> Trung cấp</label>
					</div>
					<div class="checkbox">
						<label><input type="checkbox" name="level[]" value="Không chuyên"> Không chuyên</label>
					</div>
				</div>	
			</div>
			
			<button name="register" type="submit" class="btn btn-warning btn-reg">Đăng ký</button>
		</form>	
	</div>
</div>
