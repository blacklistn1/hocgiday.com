<?php
/**
 * Created by PhpStorm.
 * User: VuongPhoenixBep
 * Date: 25/11/2017
 * Time: 4:49 CH
 */
defined('BASEPATH') OR exit('No direct script access allowed')
?>
<!DOCTYPE html>
<html>
<head>
    <title>QRcode thành công</title>
    <link rel="icon" type="image/x-icon" href="<?php echo imgsrc('x-icon.jpg') ?>">
    <link rel="stylesheet" href="<?php echo themevender('bootstrap.min.css') ?>">
    <style type="text/css" media="screen">
        .button-block {
            display: block;
            margin: 50px 0;
        }
        a {
            padding: 15px;
            background-color: #f87311;
            color: white;
            text-decoration: none;
            border: 1px solid #f87311;
            border-radius: 4px;
            box-shadow: 3px 2px 1px grey;
            margin: 20px 0;
        }
        a:hover {
            color: white;
            background-color: #f82411;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <img src="<?php echo themeimg('logo%20full.png') ?>" class="logo">
        </div>
    </div>
    <div class="row">
        <h1 class="text-center"><b>Buổi học đã được đánh dấu</b></h1>
    </div>
</div>
<script src="<?php echo themevender('jquery-3.2.0.min.js') ?>"></script>
<script src="<?php echo themevender('bootstrap.min.js') ?>"></script>
</body>
</html>

