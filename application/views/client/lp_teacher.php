<?php defined('BASEPATH') OR exit('No direct script access allowed') ?>
<!DOCTYPE html>
<html lang="vi">
<head>
    
    <meta charset="utf-8" lang="vi" http-equiv="content-type">
    <link rel="stylesheet" href="vender/normalize.min.css" media="screen" >
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="<?php echo themeimg('logo.png') ?>">

    <!--CSS-->
    <link rel="stylesheet" href="<?php echo themevender('normalize.min.css') ?>" media="screen" >
    <link rel="alternate" hreflang="vi" href="https://hocgiday.vn/" />
    <!--CSS-->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous"> 
    <!--FONT-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700|Monteserrat:500,700" rel="stylesheet">
    
    <!-- CSS -->
    <link rel="stylesheet" href="<?php echo themecss('index.css') ?>" media="screen" >
    <link rel="stylesheet" href="<?php echo themecss('footer.css') ?>" media="screen" >
    <link rel="stylesheet" href="<?php echo themecss('header.css') ?>" media="screen" >
    <link rel="stylesheet" href="<?php echo themecss('style.css') ?>" media="screen" >
    <link rel="stylesheet" href="<?php echo themecss('addClass.css') ?>" media="screen" >
    <link rel="stylesheet" href="<?php echo themecss('responsive.css') ?>" media="screen" >

    <!-- Plugins -->
    <link rel="stylesheet" href="<?php echo themevender('animate.css') ?>" media="screen" >
    <link rel="stylesheet" href="<?php echo themevender('swiper.min.css')?>" media="screen" >
    <link rel="stylesheet" href="<?php echo themevender('ion.rangeSlider.css')?>" media="screen" >

    <title><?php echo $title ?> | Học Gì Đây?</title>
</head>

<body ontouchstart="">
   
    <div id="header2" class="frame">
        <div class="logo"><a href=""><img src="<?php echo themeimg('') ?>Logo%20moi-01.png" alt=""></a></div>
        <div class="content">
            <h2>DẠY NHỮNG GÌ<br>BẠN ĐAM MÊ</h2>
            <h3>Đặt học phí và lịch dạy của riêng bạn</h3>
        </div>
        <button type="button" class="btn btn-default book"><a href="">BẮT ĐẦU GIẢNG DẠY</a></button>

    </div>
    
    <div id="why" class="frame1">
        <h1 class="text-center"><center>VÌ SAO BẠN NÊN GIẢNG DẠY CÙNG HỌC GÌ ĐÂY?</center></h1>
        
        <div id="step" class="layout">
           
            <div class="steps items40">
                <div class="heading">
                    <h3><span class="number">1</span> Giáo trình tự chọn</h3>
                </div>
                <div class="content">
                    <p>Không bị gò bó vào một giáo trình giảng dạy, tự do điều chỉnh phương pháp, tốc độ để phù hợp với từng học sinh</p>
                </div>
                <img src="<?php echo themeimg('') ?>thumb/Icon-01.png" alt="">
            </div>
            
            <div class="steps items40">
                <img src="<?php echo themeimg('') ?>thumb/Icon-02.png" alt="">
                <div class="heading">
                    <h3><span class="number">2</span> Học phí tự do</h3>
                </div>
                <div class="content">
                    <p>Tự do đặt mức học phí tương ứng với trình độ chuyên môn, khả năng sư phạm và công sức của giáo viên</p>
                </div>
            </div>
            
            <div class="steps items40">
                <div class="heading">
                    <h3><span class="number">3</span> Thời gian linh hoạt</h3>
                </div>
                <div class="content">
                    <p>Tùy chỉnh đăng lịch giảng dạy trên trang cá nhân theo thời gian rảnh(chính xác đến từng giờ) và cập nhật ngay khi có thay đổi mới</p>
                </div>
                <img src="<?php echo themeimg('') ?>thumb/Icon-03.png" alt="">
            </div>
            
            <div class="steps items40">
                <img src="<?php echo themeimg('') ?>thumb/Icon-04.png" alt="">
                <div class="heading">
                    <h3><span class="number">4</span> Địa điểm tự chọn</h3>
                </div>
                <div class="content">
                    <p>Giảng dạy trực tuyến hoặc trực tiếp. Dạy tại nhà, tại nhà học sinh hoặc một địa điểm trung gian</p>
                </div>
            </div>
        </div>
    </div>  
    
    
    <div id="howitwork" class="frame1">
        <center><h2 class="text-center">CÁCH DẠY NHẠC CÙNG HỌC GÌ ĐÂY?</h2></center>
        <div class="howitwork layout text-center">
            <div class="items30">
                <img src="<?php echo themeimg('') ?>icons/credit.png" alt="">
                <div class="content">
                    <h4>Tạo tài khoản giáo viên</h4>
                    <p>Xây dựng lý lịch cá nhân chuyên nghiệp dựa trên kỹ năng và kinh nghiệm của bạn</p>
                </div>
            </div>
            
            <div class="items30">
                <img src="<?php echo themeimg('') ?>icons/speaker.png" alt="">
                <div class="content">
                    <h4>Quảng bá và nhận học sinh</h4>
                    <p>Quảng bá trang cá nhân miễn phí trên hocgiday.vn và nhận học sinh đã đăng ký chọn bạn</p>
                </div>
            </div>
            
            <div class="items30">
                <img src="<?php echo themeimg('') ?>icons/credit.png" alt="">
                <div class="content">
                    <h4>Nhận thanh toán và phản hồi</h4>
                    <p>Nhận thanh toán vào thứ 4 hàng tuần và đánh giá công khai từ học sinh sau một số buổi</p>
                </div>
            </div>
        </div>
    </div>
    
    
    <div id="teachers" class="frame2 rate">
        <h2 class="text-center">GIÁO VIÊN CỦA CHÚNG TÔI</h2>
        <div class="teachers layout">
            <div class="itemspx">
                <div class="avatar text-center">
                    <img src="<?php echo themeimg('') ?>icons/girls.jpg" alt="">
                </div>
                <div class="content">
                    <div class="stars">
                        <span class="fa fa-star" aria-hidden="true"></span>
                        <span class="fa fa-star" aria-hidden="true"></span>
                        <span class="fa fa-star" aria-hidden="true"></span>
                        <span class="fa fa-star" aria-hidden="true"></span>
                        <span class="fa fa-star" aria-hidden="true"></span>
                    </div>
                    <h4><a href=""><b>Tên giáo viên</b></a></h4>
                    <span class="reviews">" Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae ab, ullam consectetur quibusdam </span><span class="more">Xem thêm</span>
                </div>
            </div>
            
            <div class="itemspx">
                <div class="avatar text-center">
                    <img src="<?php echo themeimg('') ?>icons/girls.jpg" alt="">
                </div>
                <div class="content">
                    <div class="stars">
                        <span class="fa fa-star" aria-hidden="true"></span>
                        <span class="fa fa-star" aria-hidden="true"></span>
                        <span class="fa fa-star" aria-hidden="true"></span>
                        <span class="fa fa-star" aria-hidden="true"></span>
                        <span class="fa fa-star" aria-hidden="true"></span>
                    </div>
                    <h4><a href=""><b>Tên giáo viên</b></a></h4>
                    <span class="reviews">" Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae ab, ullam consectetur quibusdam </span><span class="more">Xem thêm</span>
                </div>
            </div>
            
            <div class="itemspx">
                <div class="avatar text-center">
                    <img src="<?php echo themeimg('') ?>icons/girls.jpg" alt="">
                </div>
                <div class="content">
                    <div class="stars">
                        <span class="fa fa-star" aria-hidden="true"></span>
                        <span class="fa fa-star" aria-hidden="true"></span>
                        <span class="fa fa-star" aria-hidden="true"></span>
                        <span class="fa fa-star" aria-hidden="true"></span>
                        <span class="fa fa-star" aria-hidden="true"></span>
                    </div>
                    <h4><a href=""><b>Tên giáo viên</b></a></h4>
                    <span class="reviews">" Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae ab, ullam consectetur quibusdam </span><span class="more">Xem thêm</span>
                </div>
            </div>
        </div>
    </div><!--#TEACHER-->
    
        
        
        
    <div id="bottom" class="layout">
        <h1>BẠN SẴN SÀNG THAM GIA VỚI CHÚNG TÔI?</h1>
        <button type="button" class="btn btn-default book"><a href="">BẮT ĐẦU GIẢNG DẠY</a></button>
    </div>
    
    <!--Vender-->
    <script src="<?php echo themevender('')?>jquery-3.2.0.min.js"></script>
    <script src="<?php echo themevender('')?>bootstrap.min.js"></script>
    <script src="<?php echo themevender('')?>wow.min.js"></script>
    <script src="<?php echo themevender('')?>swiper.min.js"></script>
    <!-- Javascipt -->
    <script src="<?php echo themejs('')?>index.js"></script>
    <script src="<?php echo themejs('')?>function.js"></script>
    
</body>
</html>
