<?php if ((isset($has_footer)) && ($has_footer == 1)) {?>
    <div id="footer">
        <footer class="frame layout">
            <div class="items30">
                <h3>HƯỚNG DẪN</h3>
                <a href="<?php echo base_url() ?>bai-viet"><i class="fa fa-caret-right" aria-hidden="true"></i> Hướng dẫn học viên </a>
                <a href="<?php echo base_url() ?>bai-viet"><i class="fa fa-caret-right" aria-hidden="true"></i> Hướng dẫn phụ huynh </a>
                <a href="<?php echo base_url() ?>bai-viet"><i class="fa fa-caret-right" aria-hidden="true"></i> Hướng dẫn giáo viên </a>
            </div>
            <div class="items30">
                <h3>TÌM HIỂU THÊM</h3>
                <a href="<?php echo base_url() ?>ve-chung-toi"><i class="fa fa-caret-right" aria-hidden="true"></i> Về chúng tôi</a>
                <a href="<?php echo base_url() ?>bai-viet"><i class="fa fa-caret-right" aria-hidden="true"></i> Bài viết</a>
                <a href="<?php echo base_url() ?>bai-viet"><i class="fa fa-caret-right" aria-hidden="true"></i> Câu hỏi thường gặp</a>
            </div>
            <div class="items30">
                <h3>GIẢNG DẠY CÙNG CHÚNG TÔI</h3>
                <p>Để lại thông tin để chúng tôi giúp bạn</p>
                <form action="<?php echo base_url() ?>tro-thanh-giao-vien" method="POST" accept-charset="utf-8">
                <button class="text-center">DÀNH CHO GIÁO VIÊN</button>
                </form>
                <h3>KẾT NỐI VỚI CHÚNG TÔI</h3>
                <div id="social" class="layout">
                    <div class="social facebook">
                        <a href="https://www.facebook.com/hocgiday/"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                    </div>
                    <div class="social youtube">
                        <a href="https://www.youtube.com/channel/UCzOtVvQZ4dLakqa-Y0lLHwg"><i class="fa fa-youtube" aria-hidden="true"></i></a>
                    </div>
                    <div class="social google">
                        <a href="https://plus.google.com/110506048934264272362"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                    </div>
                </div>
                &nbsp;
                <p>Số điện thoại chăm sóc khách hàng:<br>
                <a href="tel:+84944852366">094 458 23 66</a><a href="tel:+84984431914">098 443 19 14</a><a href="+84902298105" title="">090 229 81 05</a></p>
            </div>
        </footer><!--FOOTER-->
    </div>
<?php } ?>
    <div id="copyright" class="text-center">
       <a href="<?php echo base_url() ?>dieu-khoan-su-dung">Điều khoản sử dụng</a><br>
        2017 Copyright Học gì đây? All rights reversed
    </div>

    <!--Vender-->
    <script
    src="<?php echo themevender('jquery-3.2.0.min.js') ?>"></script>
    <script src="<?php echo themevender('bootstrap.min.js') ?>"></script>
    <script src="<?php echo themevender('wow.min.js') ?>"></script>
    <script src="<?php echo themevender('swiper.min.js') ?>"></script>
    <script src="<?php echo themevender('ion.rangeSlider.min.js') ?>" type="text/javascript" charset="utf-8" async defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js" type="text/javascript" charset="utf-8"></script>
    <!-- Javascipt -->
    <script src="<?php echo themejs('')?>index.js"></script>
    <script src="<?php echo themejs('')?>function.js"></script>

    <!-- MY script -->
    <script src="<?php echo clientjs('app.js') ?>" type="text/javascript" charset="utf-8"></script>
<?php if (isset($is_page_mon_hoc) && ($is_page_mon_hoc == 1)): ?>
    
    <script>

    document.body.innerHTML = document.body.innerHTML.replace(/học guitar/i, 'học đánh đàn guitar');

    </script>
<?php endif ?>
