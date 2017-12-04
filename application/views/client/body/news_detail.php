    <div id="body">
        <div id="post" class="frame layout">
            <div class="post">
                <div class="title">
                    <h1><b><?php echo $rec->ten_bai_viet ?></b></h1>
                    <?php $d = date_create($rec->ngay_dang) ?>
                    <?php $date = date_format($d,"d/m/y") ?>
                    <p><span class="date"><?php echo $date ?></span> | <span class="comments"><?php echo $rec->so_luong_comments ?> Bình luận</span> | Tác giả: <span class="author"><?php echo $rec->nguoi_dang ?></span></p>
                    <img src="<?php echo imgsrc($rec->thumbnail)?>" alt="<?php echo $rec->thumbnail_alt ?>" class="full-width">
                </div>
                <!-- Noi dung bai viet -->
                <?php echo $rec->noi_dung ?>
                <!-- /.Noi dung bai viet./ -->

                <div id="tags">
                    <ul>
                    <?php for ($i = 0; $i < count($tags); $i++) {?>
                        <li><div class="dot"></div><a href="" title=""><?php echo $tags[$i] ?></a></li>
                    <?php } ?>
                    </ul>
                </div>
            </div>
            <div class="category">
                <?php if (isset($banner) && isset($target_uri)) {?>
                <div class="banner-container" id="banner-container">
                    <a href="<?php echo base_url($target_uri) ?>"><img src="<?php echo imgsrc($banner.'.jpg') ?>" class="banner"></a>
                </div>
                <?php } ?>
            </div>
        </div><!--#POST-->
        
        
        <div id="news" class=" frame">
            <h1 class="text-center"><b>BÀI VIẾT MỚI NHẤT</b></h2>
            <div class="box layout">
            <?php foreach ($recent_news as $news): ?>
                <div class="items25">
                    <a href="<?php echo base_url('bai-viet/'.$news->slug) ?>"><img src="<?php echo imgsrc($news->thumbnail)?>" alt="<?php echo $news->thumbnail_alt ?>" class="full-width"></a>
                    <div class="content">
                        <a href="<?php echo base_url('bai-viet/'.$news->slug) ?>"><h4><?php echo $news->ten_bai_viet ?></h4></a>
                        <?php $date = date_format(date_create($news->ngay_dang),"d/m/y") ?>
                        <p>Ngày <?php echo $date ?></p>
                        <span class="reviews"><?php echo $news->mo_ta_ngan ?></span><span class="more">Xem thêm</span>
                    </div>
                </div>
            <?php endforeach; ?>
            </div>
        </div><!--#NEWS-->
    </div><!--#BODY-->

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
                        <form action="<?php echo base_url('bai-viet/'.$rec->slug.'/') ?>" method="POST" role="form">
                            <div class="form-group">
                                <input type="text" name="fullname" class="form-control mailing-info" placeholder="Tên đầy đủ của bạn">
                                <span class="form-error"><?php echo form_error('fullname') ?></span>
                            </div>
                            <div class="form-group">
                                <input type="text" name="tel" class="form-control mailing-info" placeholder="Số điện thoại">
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
                                <input type="hidden" name="subject" value="piano">
                                <input type="hidden" name="city" value="Hà Nội">
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
    <!-- End modal form  -->
