<?php
    function assets($url = '')
    {
        return base_url('assets/'.$url);
    }
    function adminbs($url)
    {
        return base_url('assets/admin/bootstrap/'.$url);
    }

    function admindist($url)
    {
        return base_url('assets/admin/dist/'.$url);
    }

    function adminplugins($url)
    {
        return base_url('assets/admin/plugins/'.$url);
    }
    function clientcss($url)
    {
        return base_url('assets/client/css/'.$url);
    }
    function clientjs($url)
    {
        return base_url('assets/client/js/'.$url);
    }
    function imgsrc($url)
    {
        return base_url('assets/img/'.$url);
    }
    function fontawesome()
    {
        return base_url('assets/client/font-awesome/css/font-awesome.min.css');
    }
    function themecss($url)
    {
        return base_url('assets/theme/css/'.$url);
    }
    function themejs($url)
    {
        return base_url('assets/theme/js/'.$url);
    }
    function themevender($url)
    {
        return base_url('assets/theme/vender/'.$url);
    }
    function themeimg($url)
    {
        return base_url('assets/theme/images/'.$url);
    }
