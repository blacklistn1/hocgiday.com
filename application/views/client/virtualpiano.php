<?php
/**
 * Created by PhpStorm.
 * User: VuongPhoenixBep
 * Date: 11/12/2017
 * Time: 5:34 CH
 */
defined('BASEPATH') OR exit('No direct script acces allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Chơi đàn piano online tại Học Gì Đây?</title>

    <meta name="msvalidate.01" content="DE0BBF8600D036194F3CDE2080B8EC4C" />
    <meta charset="UTF-8" lang="vi" http-equiv="content-type">
    <script type="application/ld+json">
    {
        "@context" : "http://schema.org/",
        "@type" : "EducationalOrganization",
        "name" : "Học Gì Đây?",
        "brand" : {
  	        "@type" : "Brand",
            "name" : "Học Gì Đây?"
        },
        "logo" : "https://hocgiday.vn/assets/theme/images/logo.png",
        "image" : "https://hocgiday.vn/assets/theme/images/logo.png",
        "url" : "https://hocgiday.vn",
        "description" : "Học Guitar, Học Piano Dễ Dàng Với 60+ Giáo Viên Sống Quanh Bạn Tại Hà Nội",
        "address" : "Tòa nhà LP20 Ngõ 219 Trung Kính",
        "email" : "cskh@hocgiday.vn",
        "telephone" : "+84944852366",
        "aggregateRating" : {
  	        "@type" : "AggregateRating",
  	        "bestRating" : "5",
            "ratingCount" : "10",
            "ratingValue" : "4.5"
        }
    }
    </script>

    <!-- Google analytics tracking code -->
    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
        ga('create', 'UA-85357957-5', 'auto');
        ga('send', 'pageview');
    </script>
    <!-- End Google analytics tracking code -->
    <!-- Global site tag (gtag.js) - Google AdWords: 872148788 -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-872148788"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'AW-872148788');
    </script>
    <!-- End Global site tag (gtag.js) - Google AdWords: 872148788 -->
    <!-- Facebook Pixel Code -->
    <script>
        !function(f,b,e,v,n,t,s)
        {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
            n.callMethod.apply(n,arguments):n.queue.push(arguments)};
            if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
            n.queue=[];t=b.createElement(e);t.async=!0;
            t.src=v;s=b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t,s)}(window, document,'script',
            'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '496460187398641');
        fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
                   src="https://www.facebook.com/tr?id=496460187398641&ev=PageView&noscript=1"
        /></noscript>
    <!-- End Facebook Pixel Code -->


    <?php if (isset($meta_desc) && ($meta_desc != NULL)) {?>
        <meta name="description" content="<?php echo $meta_desc ?>">
        <meta property="og:description" content="<?php echo $meta_desc ?>">
    <?php } ?>
    <link rel="stylesheet" href="<?php echo themevender('normalize.min.css') ?>" media="screen" >
    <link rel="alternate" hreflang="vi" href="https://hocgiday.vn/" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:title" content="Chơi đàn piano online tại Học Gì Đây?">
    <?php if (isset($thumbnail)) {?>
        <meta property="og:image" content="<?php echo imgsrc($thumbnail) ?>">
    <?php } ?>
    <meta property="og:type" content="website">
    <?php if (isset($uri)) {?>
        <meta property="og:url" content="<?php echo base_url($uri) ?>">
    <?php } ?>
    <meta property="og:locale" content="en-US">
    <link rel="icon" type="image/x-icon" href="<?php echo themeimg('logo.png') ?>">

    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-KL4T6GD');</script>
    <!-- End Google Tag Manager -->

    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
        var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
        (function(){
            var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
            s1.async=true;
            s1.src='https://embed.tawk.to/59e42b134854b82732ff5bee/default';
            s1.charset='UTF-8';
            s1.setAttribute('crossorigin','*');
            s0.parentNode.insertBefore(s1,s0);
        })();
    </script>
    <!--End of Tawk.to Script-->

    <!--CSS-->
    <link rel="stylesheet" href="<?php echo themevender('bootstrap.min.css') ?>">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <!--FONT-->


    <link rel="stylesheet" href="<?php echo themecss('index.css') ?>" media="screen" >
    <link rel="stylesheet" href="<?php echo themecss('style.css') ?>" media="screen" >
    <link rel="stylesheet" href="<?php echo themecss('addClass.css') ?>" media="screen" >
    <link rel="stylesheet" href="<?php echo themecss('responsive.css') ?>" media="screen" >
    <link rel="stylesheet" href="<?php echo themevender('animate.css') ?>" media="screen" >
    <link rel="stylesheet" href="<?php echo themevender('swiper.min.css') ?>" media="screen" >
    <link rel="stylesheet" href="<?php echo themevender('ion.rangeSlider.css') ?>" media="screen" >

    <link rel="stylesheet" type="text/css" href="<?php echo clientcss('style.css') ?>">
    <link rel="stylesheet" href="<?php echo clientcss('virtualpiano.css') ?>">
    <!-- Hotjar Tracking Code for https://hocgiday.vn/ -->
    <script>
        (function(h,o,t,j,a,r){
            h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
            h._hjSettings={hjid:618218,hjsv:6};
            a=o.getElementsByTagName('head')[0];
            r=o.createElement('script');r.async=1;
            r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
            a.appendChild(r);
        })(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');
    </script>
    <!-- Mouseflow Tracking code -->
    <script type="text/javascript">
        window._mfq = window._mfq || [];
        (function() {
            var mf = document.createElement("script");
            mf.type = "text/javascript"; mf.async = true;
            mf.src = "//cdn.mouseflow.com/projects/17291d1e-d7af-4e14-bf1c-8453113650a3.js";
            document.getElementsByTagName("head")[0].appendChild(mf);
        })();
    </script>
    <!--End Mouseflow Tracking code -->

</head>

<body ontouchstart="">

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KL4T6GD"
                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

    <div id="header">
        <div class="line1 layout frame0">
            <div class="phone">
                <?php if ((isset($phone)) && ($contact_active == 1)) : ?>
                    <a href="tel:<?php echo $phone ?>"><img src="<?php echo themeimg('icons/phone.png') ?>" alt=""> <?php echo $phone_label ?></a>
                <?php endif; ?>
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
                    <a class="navbar-brand" href="<?php echo base_url() ?>"><img src="<?php echo themeimg('logo%20full.png') ?>" class="logo" alt=""></a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse navbar-ex1-collapse">
                    <ul class="nav navbar-nav">
                    </ul>
                    <form class="navbar-form navbar-left" role="search">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Search">
                        </div>
                    </form>
                    <ul class="nav navbar-nav navbar-right">
                        <?php if (isset($has_menu) && ($has_menu == 1)) {?>
                            <li><a href="<?php echo base_url() ?>">TRANG CHỦ</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">TÌM GIÁO VIÊN NHẠC<b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li class="dropdown-item"><a href="<?php echo base_url() ?>guitar">Guitar</a></li>
                                    <li class="dropdown-item"><a href="<?php echo base_url() ?>piano">Piano</a></li>
                                    <li class="dropdown-item"><a href="<?php echo base_url() ?>thanhnhac">Thanh nhạc</a></li>
                                </ul>
                            </li>
                            <li><a href="<?php echo base_url() ?>bai-viet">BÀI VIẾT</a></li>
                        <?php } ?>
                        <li><span class="btn-anchor"><a href="<?php echo base_url() ?>yeucaugiaovien" class="anchor-text">YÊU CẦU GIÁO VIÊN</a></span></li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </nav>
        </div>

        <div class="line3 layout frame0 scroll">
            <div class="phone">
                <?php if ((isset($phone)) && ($contact_active == 1)) : ?>
                    <a href="tel:<?php echo $phone ?>"><img src="<?php echo themeimg('icons/phone.png') ?>" alt=""> <?php echo $phone_label ?></a>
                <?php endif; ?>
            </div>
            <div class="logo">
                <a href="<?php echo base_url() ?>"><img src="<?php echo themeimg('logo_only.jpg') ?>" alt=""></a>
            </div>
            <div class="request">
                <span class="btn-anchor"><a href="<?php echo base_url() ?>yeucaugiaovien" class="anchor-text">YÊU CẦU GIÁO VIÊN</a></span>
            </div>
        </div>
    </div><!--#MENU-->

<div id="app">
    <div class="audioplayer" v-for="s in sounddata">
        <audio v-bind:data-num="s.number">
            <source v-bind:src="s.url" type="audio/ogg"/>
        </audio>
    </div>
    <div class="piano-box">
        <div class="center_box">
            <h2>Chơi đàn piano online tại <a href="<?php echo base_url() ?>" class="anchor">Học Gì Đây?</a></h2>
            <div class="keyboard">
                <div class="pianokey" v-for="s in display_keys">
                    <div class="white" v-if="s.type==&quot;white&quot;" v-on:click="addnote(s.num)" v-bind:class="get_current_highlight(s.num,s.key)?&quot;playing&quot;:&quot;&quot;">
                        <div class="label">{{String.fromCharCode(s.key)}}</div>
                    </div>
                    <div class="black" v-if="s.type==&quot;black&quot;" v-on:click="addnote(s.num)" v-bind:class="get_current_highlight(s.num,s.key)?&quot;playing&quot;:&quot;&quot;">
                        <div class="label">{{String.fromCharCode(s.key)}}</div>
                    </div>
                </div>
            </div><br/>
            <div class="controls">
                <ul class="notes_list" v-if="notes.length&gt;0">
                    <li v-for="(note,id) in notes" v-bind:class="now_note_id-1==id?&quot;playing&quot;:&quot;&quot;">
                        <div class="num">{{note.num}}</div>
                        <div class="time">{{note.time}}</div>
                    </li>
                </ul>
                <button v-on:click="load_sample">Bài mẫu</button>
                <button v-on:click="playnext(1)">Nốt tiếp theo</button>
                <button v-if="playing_time&lt;=1" v-on:click="startplay">Phát<i class="fa fa-play"></i></button>
                <button v-if="playing_time&gt;1" v-on:click="stopplay">Dừng phát<i class="fa fa-pause"></i></button>
                <button v-if="record_time&lt;=0" v-on:click="start_record">Thu âm<i class="fa fa-circle"></i></button>
                <button v-if="record_time&gt;=1" v-on:click="stop_record">Dừng thu âm<i class="fa fa-top"></i></button>
                <button v-on:click="notes=[]">Xóa</button>
                <h4>{{playing_time+record_time}}</h4>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-xs-6 col-xs-offset-2">
            
        </div>
    </div>
</div>

<?php if ((isset($has_footer)) && ($has_footer == 1)) {?>
    <div id="footer">
        <footer class="frame layout">
            <div class="items30">
                <h3>HƯỚNG DẪN</h3>
                <a href="<?php echo base_url() ?>hotro"><i class="fa fa-caret-right" aria-hidden="true"></i> Hướng dẫn học viên </a>
                <a href="<?php echo base_url() ?>hotro"><i class="fa fa-caret-right" aria-hidden="true"></i> Hướng dẫn giáo viên </a>
                <h3>ĐỊA CHỈ</h3>
                <p>Tầng 5 tòa nhà LP20 ngõ 219 Trung Kính, quận Cầu Giấy, Hà Nội</p>
            </div>
            <div class="items30">
                <h3>TÌM HIỂU THÊM</h3>
                <a href="<?php echo base_url() ?>ve-chung-toi"><i class="fa fa-caret-right" aria-hidden="true"></i> Về chúng tôi</a>
                <a href="<?php echo base_url() ?>bai-viet"><i class="fa fa-caret-right" aria-hidden="true"></i> Bài viết</a>
                <a href="<?php echo base_url() ?>hotro"><i class="fa fa-caret-right" aria-hidden="true"></i> Câu hỏi thường gặp</a>

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

            </div>
        </footer><!--FOOTER-->
    </div>
<?php } ?>
<?php if ((isset($has_copyright)) && ($has_copyright == 1)): ?>
    <div id="copyright" class="text-center">
        <a href="<?php echo base_url() ?>dieu-khoan-su-dung">Điều khoản sử dụng</a><br>
        2017 Copyright Học gì đây? All rights reversed
    </div>
<?php endif; ?>

<!--Vender-->
<script src="<?php echo themevender('jquery-3.2.0.min.js') ?>"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.1.8/vue.js"></script>
<script src="<?php echo themevender('bootstrap.min.js') ?>"></script>
<script src="<?php echo clientjs('') ?>zebra-pin/dist/zebra_pin.min.js"></script>
<!-- Javascipt -->
<script src="<?php echo themejs('')?>index.js"></script>
<script src="<?php echo themejs('')?>function.js"></script>

<!-- MY script -->
<script src="<?php echo clientjs('app.js') ?>" type="text/javascript" charset="utf-8"></script>
<script src="<?php echo clientjs('virtualpiano.js') ?>"></script>

</body>
</html>

