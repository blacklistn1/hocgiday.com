<?php
/**
 * Created by PhpStorm.
 * User: VuongPhoenixBep
 * Date: 07/12/2017
 * Time: 2:46 CH
 */
?>
<!-- Teacher Row -->
<div class="container">
    <div class="profile-box">
        <div class="profile-row">
            <div class="row">
                <div class="col-xs-3 profile-info text-center avatar-wrapper">
                    <img src="<?php echo imgsrc('teachers/' . $result->mon_hoc . '/' . $result->avatar) ?>" alt="<?php echo $result->nametag ?>" class="img-responsive img-circle avatar">
                </div>
                <div class="col-xs-5 profile-info">
                    <h3 id="tname"><?php echo $result->full_name ?></h3>
                    <p>Địa chỉ: <?php echo $result->dia_chi_nha ?></p>
                    <?php if (isset($result->dia_chi_nha_2)) echo "<p>Địa chỉ 2: $result->dia_chi_nha_2</p>" ?>

                </div>
                <div class="col-xs-3 profile-info">
                    <?php $hoc_phi = ($result->hoc_phi_tai_nha) ? $result->hoc_phi_tai_nha : $result->hoc_phi_tai_lop ?>
                    <p><?php echo $hoc_phi ?> 000 đồng / <?php echo $result->duration ?> phút</p>
                    <h4>Đánh giá</h4>
                    <p class="rating">
                        <?php
                        $rating = round((double)$result->rating * 2) / 2;
                        if ($rating > 5) $rating = 5; elseif ($rating < 0) $rating = 0;
                        $rate = $rating * 2;
                        for ($i = 1; $i <= 5; $i++) {
                            if ($rate > 0) {
                                if ($rate > 1.0) {
                                    echo "<i class=\"fa fa-star\" aria-hidden=\"true\"></i>";
                                } elseif ($rate === 1.0) {
                                    echo "<i class=\"fa fa-star-half-o\" aria-hidden=\"true\"></i>";
                                }
                                $rate -= 2;
                            } else {
                                echo "<i class=\"fa fa-star-o\" aria-hidden=\"true\"></i>";
                            }
                        }
                        ?>
                        <span class="num-of-rates"><?php echo $result->so_nguoi_danh_gia ?></span>
                    </p>
                </div>
            </div>
        </div>
        <div class="profile-detail">
            <div class="row">
                <div class="col-xs-3">
                    <h4>Trình độ giảng dạy</h4>
                </div>
                <div class="col-xs-9">
                    <p><?php echo $result->trinh_do_giang_day ?></p>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-3">
                    <h4>Học vấn</h4>
                </div>
                <div class="col-xs-9">
                    <p><?php echo $result->hoc_van ?></p>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-3">
                    <h4>Giới thiệu</h4>
                </div>
                <div class="col-xs-9">
                    <p><?php echo $result->gioi_thieu ?></p>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-3">
                    <h4>Video</h4>
                </div>
                <div class="col-xs-9 videowrapper">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="<?php echo $result->video ?>" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-3">
                    <h4>Lịch giảng dạy</h4>
                </div>
                <div class="col-xs-9 lich-giang-day">
                    <?php echo $result->lich_giang_day ?>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-3">
                </div>
                <div class="col-xs-3">
                    <button class="btn btn-block btn-register">Đăng ký ngay</button>
                </div>
            </div>
        </div>
        <div class="reviews">
            <div class="review-box">
                <div class="row">
                    <div class="col-xs-3">
                        <h4>Học sinh cũ</h4>
                    </div>
                    <div class="col-xs-9">
                        <?php foreach ($reviews as $review) {?>
                        <div class="review-item">
                            <div class="clearfix">
                                <h4 class="float-left"><?php echo $review->ten_hoc_sinh ?></h4>
                                <p class="float-right"><?php echo date_format(date_create($review->ngay), "d/m/y") ?></p>
                            </div>
                            <div class="rating-box">
                                <span class="rating">
                                    <?php
                                    for ($i = 1; $i <= 5; $i++) {
                                        if ($i <= $review->diem) {
                                            echo "<i class=\"fa fa-star\" aria-hidden=\"true\"></i>";
                                        } else {
                                            echo "<i class=\"fa fa-star-o\" aria-hidden=\"true\"></i>";
                                        }
                                    }
                                    ?>
                                </span>
                            </div>
                            <p><b><?php echo $review->chu_de_nhan_xet ?></b></p>
                            <p><?php echo $review->noi_dung_nhan_xet ?></p>
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Teacher Row -->
