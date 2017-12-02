<?php
/**
 * Created by PhpStorm.
 * User: Vuong
 * Date: 29/11/2017
 * Time: 5:35 CH
 */
defined('BASEPATH') OR exit('No direct script access allowed');?>
<!DOCTYPE html>
<html>
<head>
    <title>HTML</title>
    <link rel="stylesheet" href="<?php echo themevender('bootstrap-4.min.css') ?>">
    <style type="text/css">
        thead {
            background-color: #f87311;
            color: white;
        }
    </style>
</head>
<body>
<div class="container">
    <div>
        <h1 class="text-center">Theo dõi buổi học</h1>
        <h3 class="text-center">Giáo viên: <?php echo $giaovien->full_name ?></h3>
        <h3 class="text-center">Học sinh: <?php echo $hocsinh->ten ?></h3>
    </div>

    <div class="container-fluid">
        <table class="table table-bordered table-responsive table-striped">
            <thead>
                <tr>
                    <th>Giờ</th>
                    <th>Ngày</th>
                    <th>Đã diễn ra</th>
                    <th>Học phí đã trả</th>
                    <th>Tình trạng học phí</th>
                    <th>Học phí trên buổi <small>(Đơn vị: Trăm nghìn đồng)</small></th>
                    <th>Ghi chú</th>
                </tr>
            </thead>
            <tbody>

            <?php foreach($result as $res) {?>
                <tr>
                    <td><?php echo date_format(date_create($res->gio), "H:i") ?></td>
                    <td><?php echo date_format(date_create($res->ngay), "d/m/Y") ?></td>
                    <td><?php echo ((int)trim($res->da_dien_ra) === 1) ? "Đã diễn ra" : "Chưa diễn ra" ?></td>
                    <td><?php echo ((int)trim($res->hoc_phi_da_tra) === 1) ? "Đã trả" : "Chưa trả" ?></td>
                    <td><?php echo $res->tinh_trang_hoc_phi ?></td>
                    <td><?php echo $res->hoc_phi_tren_buoi ?></td>
                    <td><?php echo ($res->ghi_chu) ? $res->ghi_chu : "" ?></td>
                </tr>
            <?php } ?>
            </tbody>
        </table>
    </div>
</div>
<script src="<?php echo themevender('jquery-3.2.1.min.js') ?>"></script>
<script src="<?php echo themevender('bootstrap-4.min.js') ?>"></script>
</body>
</html>
