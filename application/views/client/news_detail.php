<?php defined('BASEPATH') OR exit('No direct script access allowed') ?>
<?php 
$tags = array();
$tags = explode(', ', $rec->tags);
 ?>
<!DOCTYPE html>
<html>
<head>
    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
        ga('create', 'UA-85357957-5', 'auto');
        ga('send', 'pageview'); 
    </script>
	<meta charset="utf-8" lang="vi" http-equiv="content-type">
	<link rel="stylesheet" href="<?php echo themevender('')?>normalize.min.css" media="screen" >
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/x-icon" href="<?php echo themeimg('')?>logo.png">
    <meta name="description" content="<?php echo $rec->mo_ta_ngan ?>">
	<!--CSS-->
	<link rel="stylesheet" href="<?php echo themevender('')?>bootstrap.min.css">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous"> 
	
    <link rel="stylesheet" href="<?php echo themecss('index.css')?>" media="screen" >
    <link rel="stylesheet" href="<?php echo themecss('footer.css')?>" media="screen" >
    <link rel="stylesheet" href="<?php echo themecss('header.css')?>" media="screen" >
    <link rel="stylesheet" href="<?php echo themecss('style.css')?>" media="screen" >
	<link rel="stylesheet" href="<?php echo themecss('')?>addClass.css" media="screen" >
	<link rel="stylesheet" href="<?php echo themecss('')?>responsive.css" media="screen" >
	<link rel="stylesheet" href="<?php echo themevender('')?>animate.css" media="screen" >
	<link rel="stylesheet" href="<?php echo themevender('')?>swiper.min.css" media="screen" >
    <link rel="stylesheet" href="<?php echo themevender('')?>ion.rangeSlider.css" media="screen" >
	<style type="text/css" media="screen">
		.list li {
			list-style-type: circle;
			list-style-position: inside;
		}
		.post a {
            text-decoration: none;
            color: #f87311;
        }
        .post a:hover {
            text-decoration: underline;
        }
	</style>
	<title><?php echo $title ?> | Học Gì Đây?</title>
</head>

<body ontouchstart="">
    <div id="header">
        <div class="line1 layout frame0">
        <div class="phone">
            <a href="tel:+84944852366"><img src="<?php echo themeimg('')?>icons/phone.png" alt=""> 094 485 23 66</a>
        </div>
        <div class="log">
            <span><a href="<?php echo base_url() ?>tro-thanh-giao-vien"><b>Bạn là giáo viên?</b></a></span>
        </div>
    </div>
        <div class="line2">
        <nav class="navbar navbar-default frame0" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo base_url() ?>"><img src="<?php echo themeimg('')?>logo%20full.png" class="logo" alt=""></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <form class="navbar-form navbar-left" role="search">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Search">
                    </div>
                </form>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="<?php echo base_url() ?>">TRANG CHỦ</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">TÌM GIÁO VIÊN NHẠC<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="<?php echo base_url() ?>guitar/ha-noi">Guitar</a></li>
                            <li><a href="<?php echo base_url() ?>piano/ha-noi">Piano</a></li>
                            <li><a href="<?php echo base_url() ?>thanhnhac/ha-noi">Thanh nhạc</a></li>
                        </ul>
                    </li>
                    <li><a href="<?php echo base_url() ?>bai-viet">BÀI VIẾT</a></li>
                    <li class="request"><span><a href="<?php echo base_url() ?>yeucaugiaovien">YÊU CẦU GIÁO VIÊN</a></span></li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
        


    </div>
        <div class="line3 layout frame0 scroll">
        <div class="phone">
            <a href="tel:+84944852366"><img src="<?php echo themeimg('')?>icons/phone.png" alt=""> 094 485 23 66</a>
        </div>
        <div class="logo">
            <a href="<?php echo base_url() ?>"><img src="<?php echo themeimg('')?>logo_only.jpg" alt=""></a>
        </div>
        <div class="request">
            <span><a href="<?php echo base_url() ?>yeucaugiaovien"><b>YÊU CẦU GIÁO VIÊN</b></a></span>
        </div>
    </div>
    </div><!--#MENU-->

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
                <?php echo $rec->noi_dung ?>
                <div id="tags">
                    <ul>
                    <?php for ($i = 0; $i < count($tags); $i++) {?>
                        <li><div class="dot"></div><a href="" title=""><?php echo $tags[$i] ?></a></li>
                    <?php } ?>
                    </ul>
                </div>
            </div>
            <div class="catogory">
                <h2><b>CHUYÊN MỤC CÁC BÀI VIẾT</b></h2>
                <a href="<?php echo base_url() ?>bai-viet/danh-sach-bai-viet">Dành cho Học sinh (<span class="amount">3</span> bài)</a>
                <a href="<?php echo base_url() ?>bai-viet/danh-sach-bai-viet">Dành cho Phụ huynh (<span class="amount">4</span> bài)</a>
                <a href="<?php echo base_url() ?>bai-viet/danh-sach-bai-viet">Dành cho Giáo viên (<span class="amount">6</span> bài)</a>
            </div>
        </div><!--#POST-->
        
        
        <div id="news" class=" frame">
            <h1 class="text-center"><b>BÀI VIẾT MỚI NHẤT</b></h2>
            <div class="box layout">
            <?php foreach ($recent_news as $recent): ?>
                <div class="items25">
                    <a href="<?php echo base_url('bai-viet/'.$recent->slug) ?>"><img src="<?php echo imgsrc($recent->thumbnail)?>" alt="<?php echo $recent->thumbnail_alt ?>" class="full-width"></a>
                    <div class="content">
                        <a href="<?php echo base_url('bai-viet/'.$recent->slug) ?>"><h4><?php echo $recent->ten_bai_viet ?></h4></a>
                        <?php $date = date_format(date_create($recent->ngay_dang),"d/m/y") ?>
                        <p>Ngày <?php echo $date ?></p>
                        <span class="reviews"><?php echo $recent->mo_ta_ngan ?></span><span class="more">Xem thêm</span>
                    </div>
                </div>
            <?php endforeach; ?>
                
<!--                 <div class="pagination">
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
        </div><!--#NEWS-->
    </div><!--#BODY-->
    

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
                <button class="text-center"><a href="<?php echo base_url() ?>tro-thanh-giao-vien" title="">DÀNH CHO GIÁO VIÊN</a></button>
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
            </div>

        </footer><!--FOOTER-->
    </div>
    
    
    <div id="copyright" class="text-center">
       <a href="<?php echo base_url() ?>dieu-khoan-su-dung">Điều khoản sử dụng</a><br>
        2017 Copyright Học gì đây? All rights reversed
    </div>
    
    
    
    <!--Vender-->
    <script src="<?php echo themevender('')?>jquery-3.2.0.min.js"></script>
    <script src="<?php echo themevender('')?>bootstrap.min.js"></script>
    <script src="<?php echo themevender('')?>wow.min.js"></script>
    <script src="<?php echo themevender('')?>swiper.min.js"></script>
    <script src="<?php echo themevender('')?>ion.rangeSlider.min.js"></script>
    <!-- Javascipt -->
    <script src="<?php echo themejs('')?>function.js"></script>
    <script src="<?php echo themejs('')?>pagination.js"></script>
</body>
</html>