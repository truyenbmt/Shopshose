<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/* home */
$route['default_controller'] = 'home';
$route['lien-he'] = 'home/lienhe';
$route['thongtin/(:any)'] = 'thongtin/index';
$route['product/(:any)'] = 'product/index';
$route['category/(:any)'] = 'product/category';
$route['category/(:any)/(:any)'] = 'product/category';
$route['tin-tuc/(:any)'] = 'tintuc/index';
$route['danh-sach-tin'] = 'tintuc/category';
$route['danh-sach-tin/(:any)'] = 'tintuc/category';

/* admin */
$route['admin'] = 'admin';
$route['admin/config'] = 'ad_config/index';
$route['admin/user'] = 'ad_user/index';
$route['admin/slide'] = 'ad_slide/index';
$route['admin/banner'] = 'ad_banner/index';
$route['admin/category'] = 'ad_category/index';
$route['admin/category/page'] = 'ad_category/index';
$route['admin/category/page/(:any)'] = 'ad_category/index';
$route['admin/product'] = 'ad_product/index';
$route['admin/product/page'] = 'ad_product/index';
$route['admin/product/page/(:any)'] = 'ad_product/index';
$route['admin/thongtin'] = 'ad_thongtin/index';
$route['admin/thongtin/page'] = 'ad_thongtin/index';
$route['admin/thongtin/page/(:any)'] = 'ad_thongtin/index';
$route['admin/news'] = 'ad_news/index';
$route['admin/news/page'] = 'ad_news/index';
$route['admin/news/page/(:any)'] = 'ad_news/index';

/* other */
$route['translate_uri_dashes'] = FALSE;
