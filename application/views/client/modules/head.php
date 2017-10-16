    <?php if (isset($is_home) && ($is_home == 0)) {$page_title .= " | Học Gì Đây?";} ?>
    <meta name="msvalidate.01" content="DE0BBF8600D036194F3CDE2080B8EC4C" />
    <meta charset="UTF-8" lang="vi" http-equiv="content-type">

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
    
    <?php if (isset($meta_desc) && ($meta_desc != NULL)) {?>
    <meta name="description" content="<?php echo $meta_desc ?>">
    <meta property="og:description" content="<?php echo $meta_desc ?>">
    <?php } ?>
    <link rel="stylesheet" href="<?php echo themevender('normalize.min.css') ?>" media="screen" >
    <link rel="alternate" hreflang="vi" href="https://hocgiday.vn/" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:title" content="<?php echo $page_title; ?>">
    <?php if (isset($thumbnail)) {?>
    <meta property="og:image" content="<?php echo $thumbnail ?>">
    <?php } ?>
    <meta property="og:type" content="website">
    <meta property="og:url" content="content">
    <meta property="og:locale" content="en-US">
    <link rel="icon" type="image/x-icon" href="<?php echo themeimg('logo.png') ?>">

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
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700|Monteserrat:500,700" rel="stylesheet">
    
    <link rel="stylesheet" href="<?php echo themecss('index.css') ?>" media="screen" >
    <link rel="stylesheet" href="<?php echo themecss('style.css') ?>" media="screen" >
    <link rel="stylesheet" href="<?php echo themecss('addClass.css') ?>" media="screen" >
	<link rel="stylesheet" href="<?php echo themecss('responsive.css') ?>" media="screen" >
	<link rel="stylesheet" href="<?php echo themevender('animate.css') ?>" media="screen" >
    <link rel="stylesheet" href="<?php echo themevender('swiper.min.css') ?>" media="screen" >
    <link rel="stylesheet" href="<?php echo themevender('ion.rangeSlider.css') ?>" media="screen" >
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo clientcss('style.css') ?>">
    <title><?php echo $page_title; ?></title>