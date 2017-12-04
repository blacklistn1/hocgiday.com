    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KL4T6GD"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <?php if (isset($has_header) && ($has_header == 1)) {?>
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
                                <li><a href="<?php echo base_url() ?>guitar">Guitar</a></li>
                                <li><a href="<?php echo base_url() ?>piano">Piano</a></li>
                                <li><a href="<?php echo base_url() ?>thanhnhac">Thanh nhạc</a></li>
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
    <?php } ?>