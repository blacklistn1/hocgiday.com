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
                <h2><b>CHUYÊN MỤC CÁC BÀI VIẾT</b></h2>
                <a href="<?php echo base_url() ?>bai-viet/danh-sach-bai-viet">Guitar (<span class="amount">3</span> bài)</a>
                <a href="<?php echo base_url() ?>bai-viet/danh-sach-bai-viet">Piano (<span class="amount">4</span> bài)</a>
                <a href="<?php echo base_url() ?>bai-viet/danh-sach-bai-viet">Thanh nhạc (<span class="amount">6</span> bài)</a>
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
