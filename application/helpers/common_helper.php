<?php
	function pre($var)
    {
		echo "<pre>";
		print_r($var);
		echo "</pre>";
	}

	function time_vn($format = "H:i:s d/m/Y")
    {
        return date_format(date_create(NULL, timezone_open("Asia/Ho_Chi_Minh")), $format);
    }
