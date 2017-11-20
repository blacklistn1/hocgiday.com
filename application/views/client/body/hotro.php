    <div id="body" class="body ">
        <div id="post" class="frame layout hotro-post">
            <div class="post">
                <div class="title">
                    <h2><b><?php echo $row['heading'] ?></b></h2>

                    <p><span class="date">Cập nhật lần cuối: <?php echo date("d-m-Y", strtotime($row['cap_nhat_lan_cuoi'])) ?></span></p>
                    <hr>
                </div>
                <!-- Noi dung bai viet -->
                <?php echo $row['noi_dung'] ?>
                <!-- /.Noi dung bai viet./ -->
            </div>
            <div class="category">
                <h3>Những trang có thể bạn muốn xem:</h3>
                <a href="<?php echo base_url() ?>">Trang chủ</a>
                <a href="<?php echo base_url() ?>bai-viet">Bài viết</a>
                <a href="<?php echo base_url() ?>piano">Tìm giáo viên piano</a>
                <a href="<?php echo base_url() ?>guitar">Tìm giáo viên guitar</a>
            </div>
        </div><!--#POST-->
    </div><!--#BODY-->