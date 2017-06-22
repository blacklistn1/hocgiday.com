<?php 
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
    function clientcss_url($url){
        return base_url('assets/client/dist/css'.$url);
    }
