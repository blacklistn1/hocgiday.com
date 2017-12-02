<?php
/**
 * Created by PhpStorm.
 * User: VuongPhoenixBep
 * Date: 30/11/2017
 * Time: 3:21 CH
 */

defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
    <title>HTML</title>
    <link rel="stylesheet" href="<?php echo themevender('bootstrap-4.min.css') ?>">
    <style type="text/css">
        table {
            margin-top: 10px;
        }
    </style>
</head>
<body>
<div class="container">
    <table class="table table-bordered table-striped">
        <thead>
            <th>ID</th>
            <th>Giờ</th>
            <th>Ngày</th>
        </thead>
        <tbody>
        <?php foreach($result as $result) {?>
            <tr>
                <td><?php echo $result->id ?></td>
                <td><?php echo $result->gio ?></td>
                <td><?php echo $result->ngay ?></td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
</div>

<script src="<?php echo themevender('jquery-3.2.1.min.js') ?>"></script>
<script src="<?php echo themevender('bootstrap-4.min.js') ?>"></script>
</body>
</html>
