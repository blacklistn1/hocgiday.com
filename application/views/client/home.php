<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8" lang="vi" http-equiv="content-type">
    <link rel="stylesheet" href="<?php echo themevender('normalize.min.css') ?>" media="screen" >
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="<?php echo themeimg('logo.png') ?>">

    <!--CSS-->
    <link rel="stylesheet" href="<?php echo themevender('bootstrap.min.css') ?>">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous"> 
    <!--FONT-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700|Monteserrat:500,700" rel="stylesheet">
    
    <link rel="stylesheet" href="<?php echo themecss('index.css') ?>" media="screen" >
    <link rel="stylesheet" href="<?php echo themecss('addClass.css') ?>" media="screen" >
	<link rel="stylesheet" href="<?php echo themecss('responsive.css') ?>" media="screen" >
	<link rel="stylesheet" href="<?php echo themevender('animate.css') ?>" media="screen" >
    <title><?php echo $title ?></title>
</head>

<body ontouchstart="">
    <div id="header">
        <div class="line1 layout frame0">
        <div class="phone">
            <a href="tel:+84944852366"><img src="<?php echo themeimg('icons/phone.png') ?>" alt=""> 094 485 23 66</a>
        </div>
        <div class="log">
            <span style="text-decoration: underline;"><a href="">Bạn là giáo viên?</a></span>
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
                <a class="navbar-brand" href="#"><img src="<?php echo themeimg('logo%20full.png') ?>" class="logo" alt=""></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav">
<!--
                    <li class="active"><a href="#">Link</a></li>
                    <li><a href="#">Link</a></li>
-->
                </ul>
                <form class="navbar-form navbar-left" role="search">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Search">
                    </div>
                </form>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#">TRANG CHỦ</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">TÌM GIÁO VIÊN NHẠC<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Hà Nội</a></li>
                            <li><a href="#">Đà Nẵng</a></li>
                            <li><a href="#">Sài Gòn</a></li>
                        </ul>
                    </li>
                    <li><a href="#">BÀI VIẾT</a></li>
                    <li class="request"><span href="#">YÊU CẦU GIÁO VIÊN</span></li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
        


    </div>
        <div class="line3 layout frame0 scroll">
        <div class="phone">
            <a href="tel:+84944852366"><img src="<?php echo themeimg('icons/phone.png') ?>" alt=""> 094 485 23 66</a>
        </div>
        <div class="logo">
            <a href=""><img src="<?php echo themeimg('logo_only.jpg') ?>" alt=""></a>
        </div>
        <div class="request">
            <span href="#">YÊU CẦU GIÁO VIÊN</span>
        </div>
    </div>
    </div><!--#MENU-->

    <div id="body">
        <div id="banner">
            <div class="background">
                <img src="<?php echo themeimg('banner/Anh-dau-02.jpg') ?>" alt="" class="full-width big">
                <img src="<?php echo themeimg('banner/Anh%20dau-03.jpg') ?>" alt="" class="full-width small">
            </div>
            <div class="insider text-center">
                <h1>TÌM GIÁO VIÊN NHẠC DỄ HƠN HẲN</h1>
                <div class="search">
                    <form>
                      <input type="text" name="search" placeholder="Search..">
                    </form>
                </div>
                <button class="instrument"><b>CHỌN NHẠC CỤ</b></button>
                
                <div class="symbol">
                    <img src="<?php echo themeimg('icons/down.png') ?>" alt="">
                </div>
            </div>
        </div><!--#BANNER-->

        <div id="options" class="text-center frame0">
            <h1><b>LỰA CHỌN NHẠC CỤ</b></h1>
            <div id="instruments" class="layout mt50">
                <div class="items30 wow fadeInDown" data-wow-offset="100">
                    <img src="<?php echo themeimg('thumb/Guitar-01.jpg') ?>" alt="" class="full-width">
                    <div class="insider">
                        <div class="content">
                            <a href="<?php echo base_url() ?>guitar/ha-noi/"><p>GUITAR</p></a>
                        </div>
                    </div>
                </div>
                <div class="items30 wow fadeInDown" data-wow-offset="100">
                    <img src="<?php echo themeimg('thumb/Piano-01.jpg') ?>" alt="" class="full-width">
                    <div class="insider">
                        <div class="content">
                            <a href="<?php echo base_url() ?>piano/ha-noi/"><p>PIANO</p></a>
                        </div>
                    </div>
                </div>
                <div class="items30 wow fadeInDown" data-wow-offset="100">
                    <img src="<?php echo themeimg('thumb/Thanh%20nhac-01.jpg') ?>" alt="" class="full-width">
                    <div class="insider">
                        <div class="content">
                            <a href=""><p>THANH NHẠC</p></a>
                        </div>
                    </div>
                </div>
            </div><!--#INSTRUMENT-->

        </div><!--OPTIONS-->

        <div id="steps" class="text-center frame">
            <h1><b>3 BƯỚC ĐỂ HỌC NHẠC CỤ DỄ HƠN HẲN</b></h1>
            <div class="box layout">
                <div class="steps items25  wow fadeInUp"data-wow-offset="100">
                    <h2><b>Bước 1: Tìm kiếm giáo viên</b></h2>
                    <p>Tìm kiếm giáo viên theo các yếu tố quan trọng với bạn: địa điểm. trình độ, đánh giá...</p>
                    <div class="picture">
                        <img src="<?php echo themeimg('thumb/Guitar-01.jpg') ?>" alt="" class="full-width">
                    </div>
                </div>
                <div class="steps items25  wow fadeInUp"data-wow-offset="100">
                    <h2><b>Bước 2: Lựa chọn giáo viên</b></h2>
                    <p>Xem trang cá nhân của từng giáo viên để chọn giáo viên phù hợp với bạn nhất.</p>
                    <div class="picture">
                        <img src="<?php echo themeimg('thumb/Guitar-01.jpg') ?>" alt="" class="full-width">
                    </div>
                </div>
                <div class="steps items25  wow fadeInUp"data-wow-offset="100">
                    <h2><b>Bước 3: Đặt lịch học</b></h2>
                    <p>Xem trang cá nhân của từng giáo viên để chọn giáo viên phù hợp với bạn nhất.</p>
                    <div class="picture">
                        <img src="<?php echo themeimg('thumb/Guitar-01.jpg') ?>" alt="" class="full-width">
                    </div>
                </div>
            </div>
        </div><!--STEPS-->

        <div id="why" class="text-center frame">
            <div class="content">
                <h1><b>TẠI SAO BẠN SẼ THÍCH HỌC GÌ ĐÂY?</b></h1>
                <div class="box layout">
                    <div class="reasons items25 wow fadeInRight"data-wow-offset="100">
                        <img src="<?php echo themeimg('icons/icon1.png') ?>" alt="">
                        <h4>Dành riêng cho bạn</h4>
                        <p>Giáo viên bạn được học sẽ phù hợp với riêng bạn: về học phí, lịch học, kinh nghiệm giảng dạy...</p>
                    </div>

                    <div class="reasons items25 wow fadeInRight"data-wow-offset="100">
                        <img src="<?php echo themeimg('icons/icon2.png') ?>" alt="">
                        <h4>Gần nhà</h4>
                        <p>Giáo viên bạn được học sẽ phù hợp với riêng bạn: về học phí, lịch học, kinh nghiệm giảng dạy...</p>
                    </div>

                    <div class="reasons items25 wow fadeInRight"data-wow-offset="100">
                        <img src="<?php echo themeimg('icons/icon1.png') ?>" alt="">
                        <h4>Dành riêng cho bạn</h4>
                        <p>Giáo viên bạn được học sẽ phù hợp với riêng bạn: về học phí, lịch học, kinh nghiệm giảng dạy...</p>
                    </div>
                </div>
            </div>
        </div><!--WHY-->

        <div id="reviews" class="frame text-center">
            <h1><b>HỌC SINH CŨ KHEN TẶNG</b></h1>
            <div class="box layout">
                <div class="items20  wow fadeInLeft text-left"data-wow-offset="100">
                    <div class="stars">
                        <span class="fa fa-star" aria-hidden="true"></span>
                        <span class="fa fa-star" aria-hidden="true"></span>
                        <span class="fa fa-star" aria-hidden="true"></span>
                        <span class="fa fa-star" aria-hidden="true"></span>
                        <span class="fa fa-star" aria-hidden="true"></span>
                    </div>
                    <div class="content">
                        <p>Đánh giá bởi <b class="name">Hạnh Liên</b></p>
                        <span class="reviews">"Con tôi rất thích thầy Tùng vì thầy rất nhẹ nhàng và kiên nhẫn, giảng dạy rất từ tốn và dễ hiểu. Tôi nghĩ thầy là một giáo viên tốt và khá là tin tưởng khi làm việc với thầy." </span><span class="more">Xem thêm</span>
                    </div>
                    <div class="students layout">
                        <img src="<?php echo imgsrc('teachers/piano/hoc_piano_voi_trantung.jpg') ?>" alt="" class="full">
                        <div class="info">
                            <h4> phố Triều Khúc, Hà Nội</h4>
                            <h4><b>Thầy Trần Văn Tùng</b></h4>
                        </div>
                    </div>
                </div>

                <div class="items20  wow fadeInLeft text-left"data-wow-offset="100">
                    <div class="stars">
                        <span class="fa fa-star" aria-hidden="true"></span>
                        <span class="fa fa-star" aria-hidden="true"></span>
                        <span class="fa fa-star" aria-hidden="true"></span>
                        <span class="fa fa-star" aria-hidden="true"></span>
                        <span class="fa fa-star" aria-hidden="true"></span>
                    </div>
                    <div class="content">
                        <p>Đánh giá bởi <b class="name">Kiều Như</b></p>
                        <span class="reviews">"Thầy Vũ Hoàng thực sự là một trong những người tử tế nhất mình từng gặp. Thầy giáo vượt qua sự mong đợi của mình, và mình thật sự rất buồn khi phải thôi học thầy (do một số lý do cá nhân), dù  vẫn tin chắc rằng mình sẽ học thầy nữa. Thầy Hoàng vừa là một giáo viên tuyệt vời, vừa là một người bạn của mình, và mình thực sự tin rằng phương pháp giảng dạy của thầy sẽ cải thiện được đáng kể tất cả những ai mong muốn phát triển khả năng guitar của mình. Cảm ơn nhé, Hoàng, và hẹn gặp lại ở lần tới!"</span><span class="more">Xem thêm</span>
                    </div>
                    <div class="students layout">
                        <img src="<?php echo imgsrc('teachers/guitar/hoc_guitar_voi_vuhoang.jpg') ?>" alt="" class="full">
                        <div class="info">
                            <h4>phố Thái Hà, Hà Nội</h4>
                            <h4><b>Vũ Hoàng</b></h4>
                        </div>
                    </div>
                </div>

                <div class="items20  wow fadeInLeft text-left"data-wow-offset="100">
                    <div class="stars">
                        <span class="fa fa-star" aria-hidden="true"></span>
                        <span class="fa fa-star" aria-hidden="true"></span>
                        <span class="fa fa-star" aria-hidden="true"></span>
                        <span class="fa fa-star" aria-hidden="true"></span>
                        <span class="fa fa-star" aria-hidden="true"></span>
                    </div>
                    <div class="content">
                        <p>Đánh giá bởi <b class="name">Tuấn Nguyễn</b></p>
                        <span class="reviews">"Mình học chị Hương cả xướng âm và piano. Chị Hương dạy rất nhiệt tình và bài bản. Đặc biệt mình không thấy chị giấu bài, cắt thời lượng dạy hay bôi khối lượng dạy dài ra để kéo thêm số buổi như một số giáo viên khác.Nhìn chung chị Hương là giáo viên mà học sinh có thể tin tưởng nếu muốn theo đuổi âm nhạc, nhất là piano hay organ."</span><span  class="more">Xem thêm</span>
                    </div>
                    <div class="students layout">
                        <img src="<?php echo imgsrc('teachers/piano/hoc_piano_voi_lehuong.jpg') ?>" alt="" class="full">
                        <div class="info">
                            <h4>phố Nguyễn Khuyến, Hà Nội</h4>
                            <h4><b>Lê Thị Hương</b></h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="count" class="text-center frame">
            <h3><b>KHÔNG CHỈ DỪNG Ở ĐÓ, GIÁO VIÊN CỦA CHÚNG TÔI ĐÃ DẠY</b></h3>
            <img src="<?php echo themeimg('banner/count.png') ?>" alt="">
            <h3><b>GIỜ VÀ TIẾP TỤC!</b></h3>
        </div><!--COUNT-->
        
        <div id="myInstrument" class="text-center">
            <div class="background">
                <img src="<?php echo themeimg('banner/Ban%20da%20biet-01.jpg') ?>" alt="" class="full-width">
            </div>
            <div class="insider">
                <h1><b>BẠN ĐÃ THÍCH NHẠC CỤ NÀO CHƯA?</b></h1>
                <p>Hãy để chúng tôi cùng khá phá nhạc cụ sinh ra dành riêng cho bạn</p>
                <button class="instrument wow tada" data-wow-offset="100"><b>CHỌN NHẠC CỤ CỦA TÔI</b></button>
            </div>
        </div><!--MYINSTRUMENT-->
        
        <div id="contact" class="frame0 layout">
            <div class="left"><h3><b>CÒN THẮC MẮC?</b> <i class="fa fa-hand-o-right" aria-hidden="true"></i></h3></div>
            <div class="right"><h4><i class="fa fa-phone" aria-hidden="true"></i> Gọi cho chúng tôi tại <a href="tel:+84944852366">094 485 23 66</a></h4></div>
        </div>
        
    </div>

    <div id="footer">
        <footer class="frame layout">
            <div class="items30">
                <h3>HƯỚNG DẪN</h3>
                <a href=""><i class="fa fa-caret-right" aria-hidden="true"></i> Hướng dẫn học sinh </a>
                <a href=""><i class="fa fa-caret-right" aria-hidden="true"></i> Hướng dẫn phụ huynh </a>
                <a href=""><i class="fa fa-caret-right" aria-hidden="true"></i> Hướng dẫn giáo viên </a>
            </div>
            <div class="items30">
                <h3>Tìm hiểu thêm</h3>
                <a href=""><i class="fa fa-caret-right" aria-hidden="true"></i> Về chúng tôi</a>
                <a href=""><i class="fa fa-caret-right" aria-hidden="true"></i> Bài viết</a>
                <a href=""><i class="fa fa-caret-right" aria-hidden="true"></i> Câu hỏi thường gặp</a>
            </div>
            <div class="items30">
                <h3>GIẢNG DẠY CÙNG CHÚNG TÔI</h3>
                <p>Để lại thông tin để chúng tôi giúp bạn</p>
                <button class="text-center">DÀNH CHO GIÁO VIÊN</button>
                <h3>KẾT NỐI VỚI CHÚNG TÔI</h3>
                <div id="social" class="layout">
                    <div class="social facebook">
                        <a href="https://www.facebook.com/hocgiday/"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                    </div>
                    <div class="social youtube">
                        <a href="https://www.youtube.com/channel/UCzOtVvQZ4dLakqa-Y0lLHwg"><i class="fa fa-youtube" aria-hidden="true"></i></a>
                    </div>
                    <div class="social google">
                        <a href="https://plus.google.com/u/1/b/110506048934264272362/?hl=vi"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>

        </footer><!--FOOTER-->
    </div>
    
    <div id="copyright" class="text-center">
       <a href="https://www.hocgiday.com/dieu-khoan-su-dung/">Điều khoản sử dụng</a><br>
        2017 Copyright Học gì đây? All rights reversed
    </div>
    
    
    
    
    <!--Vender-->
    <script src="<?php echo themevender('jquery-3.2.0.min.js') ?>"></script>
    <script src="<?php echo themevender('bootstrap.min.js') ?>"></script>
    <script src="<?php echo themevender('wow.min.js') ?>"></script>
    
    
    <!-- Javascipt -->
    <script src="<?php echo themejs('index.js') ?>"></script>
</body>
</html>


<!--FRONT-END CREATED BY: QUANG NGOC-->
<!--EMAIL: qn.khuat@gmail.com-->