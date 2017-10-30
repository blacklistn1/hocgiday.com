<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/

$route['default_controller'] = 'home';
$route['404_override'] = 'error404';
$route['translate_uri_dashes'] = FALSE;
$route['test'] = 'test';
$route['guitar'] = 'mon_hoc/choose_city/guitar';
$route['piano'] = 'mon_hoc/choose_city/piano';
$route['guitar/(:any)/inbound'] = 'mon_hoc/lp/guitar/$1';
$route['piano/(:any)/inbound'] = 'mon_hoc/lp/piano/$1';
$route['guitar/(:any)'] = 'mon_hoc/index/guitar/$1';
$route['piano/(:any)'] = 'mon_hoc/index/piano/$1';
$route['thanhnhac/(:any)'] = 'mon_hoc/index/thanhnhac/$1';
$route['ve-chung-toi'] = 'home/aboutus';
$route['dieu-khoan-su-dung'] = 'home/terms';
$route['bai-viet'] = 'baiviet';
$route['bai-viet/danh-sach-bai-viet'] = 'baiviet/news_list/1';
$route['bai-viet/danh-sach-bai-viet/(:num)'] = 'baiviet/news_list/$1';
$route['bai-viet/chuyen-muc/(:any)'] = 'baiviet/news_category/$1';
$route['bai-viet/(:any)'] = 'baiviet/news_detail/$1';
$route['tro-thanh-giao-vien'] = 'home/lp_teacher';
