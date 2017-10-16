<div class="container-fluid">
	
	<div class="col-xs-12 col-sm-8 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-2 col-md-offset-3 col-lg-offset-3 reg-box">
		<form class="reg-form" action="<?php echo base_url() ?>dangkygiangday" method="POST" role="form">
			<legend>Đăng ký giảng dạy cùng Học Gì Đây?</legend>
			<h3>Thông tin bắt buộc</h3>

			<div class="form-group">
				<input name="fullname" type="text" class="form-control" placeholder="Tên đầy đủ">
				<span class="form-error"><?php echo form_error('fullname') ?></span>
			</div>
			<div class="form-group">
				<input name="tel" type="number" class="form-control" placeholder="Số điện thoại">
				<span class="form-error"><?php echo form_error('tel') ?></span>
			</div>
			<div class="form-group">
				<input name="email" type="text" class="form-control" placeholder="Email">
				<span class="form-error"><?php echo form_error('email') ?></span>
			</div>
			<div class="form-group">
				<input name="address" type="text" class="form-control" placeholder="Địa chỉ thường trú">
				<span class="form-error"><?php echo form_error('address') ?></span>
			</div>
			<div class="row">
				<div class="form-group">
					<div class="col-xs-12">
						<label for="subject_request[]">Bạn muốn kiểm tra năng lực giảng dạy nhạc cụ nào?</label>
					</div>
					<div class="col-xs-12 col-md-6">
						<div class="checkbox">
							<label>
								<input type="checkbox" name="subject_request[]" value="Guitar">
								Guitar
							</label>
						</div>
						<div class="checkbox">
							<label>
								<input type="checkbox" name="subject_request[]" value="Piano">
								Piano
							</label>
						</div>
						<div class="checkbox">
							<label>
								<input type="checkbox" name="subject_request[]" value="Thanh nhạc">
								Thanh nhạc
							</label>
						</div>
						<div class="checkbox">
							<label>
								<input type="checkbox" name="subject_request[]" value="Keyboard">
								Keyboard
							</label>
						</div>
						<div class="checkbox">
							<label>
								<input type="checkbox" name="subject_request[]" value="Violin">
								Violin
							</label>
						</div>
						<div class="checkbox">
							<label>
								<input type="checkbox" name="subject_request[]" value="Cajon">
								Cajon
							</label>
						</div>
					</div>
					<div class="col-xs-12 col-md-6">
						<div class="checkbox">
							<label>
								<input type="checkbox" name="subject_request[]" value="Trống">
								Trống
							</label>
						</div>
						<div class="checkbox">
							<label>
								<input type="checkbox" name="subject_request[]" value="Guitar bass">
								Guitar bass
							</label>
						</div>
						<div class="checkbox">
							<label>
								<input type="checkbox" name="subject_request[]" value="Đàn bầu">
								Đàn bầu
							</label>
						</div>
						<div class="checkbox">
							<label>
								<input type="checkbox" name="subject_request[]" value="Saxophone">
								Saxophone
							</label>
						</div>
						<div class="checkbox">
							<label>
								<input type="checkbox" name="subject_request[]" value="Đàn tranh">
								Đàn tranh
							</label>
						</div>
						<div class="checkbox">
							<label>
								<input type="checkbox" name="subject_request[]" value="Cello">
								Cello
							</label>
						</div>
					</div>
					<div class="col-xs-12">
						<span class="form-error"><?php echo form_error('subject_request[]') ?></span>
					</div>
				</div>
			</div>
			
			<hr>
			<div class="optional">
				<h3>Để chúng tôi hiểu rõ bạn hơn</h3>
				<div class="form-group">
					<label for="video">Video tác phẩm mà bạn tâm đắc nhất:</label>
					<input name="video" type="text" class="form-control" placeholder="Để link video tại đây">
				</div>
				<div class="form-group">
					<label for="about">Giới thiệu ngắn gọn về bản thân:</label>
					<textarea name="about" id="input" rows="10" class="form-control"></textarea>
				</div>			
			</div>
			<button name="register" type="submit" class="btn btn-warning btn-reg">Gửi đi</button>
		</form>	
	</div>
</div>
