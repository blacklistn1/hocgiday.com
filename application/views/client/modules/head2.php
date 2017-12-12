<?php
/**
 * Created by PhpStorm.
 * User: VuongPhoenixBep
 * Date: 04/12/2017
 * Time: 5:07 CH
 */
if (isset($is_home) && ($is_home == 0)) {$page_title .= " | Học Gì Đây?";} ?>
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
<meta property="og:title" content="<?php echo $page_title; ?>">
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
<link rel="stylesheet" href="<?php echo themevender('bootstrap-4.min.css') ?>">
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
<title><?php echo $page_title; ?></title>
