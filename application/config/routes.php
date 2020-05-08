<?php
defined('BASEPATH') or exit('No direct script access allowed');

//Default URL Routing
$route['default_controller'] = 'home';
$route['home'] = 'home';
// $route['about'] = 'home/about';
$route['courses/list/:any'] = 'Courses/coursesList';
$route['courses/list/prakerja'] = 'Courses/coursesList';
$route['courses/:any/:any'] = 'Courses';
$route['courses/search'] = 'Courses/searchCourses';
$route['blog'] = 'home/blog';
$route['blogdetail'] = 'home/blogdetail';
$route['elements'] = 'home/elements';
$route['kartu_prakerja'] = 'home/kartu_prakerja';
$route['instruktur'] = 'Instructor';


// $route['policy'] = "Home/policy";
$route['terms'] = "Home/terms";
$route['faq'] = "Home/faq";
$route['privacy'] = "Home/privacy";
$route['about-us'] = "Home/aboutUs";
$route['contact'] = 'Contact';
$route['pencari-kerja'] = 'home/pencari_kerja';
$route['umkm'] = 'home/umkm';
$route['ojek-online'] = 'home/ojek_online';
$route['industri-pariwisata'] = 'home/industri_pariwisata';

/* CMS Section */
$route['cms'] = 'CMS/index';
$route['cms/login'] = 'CMS/index';
$route['cms/dashboard'] = 'CMS/dashboard';
$route['cms/member'] = 'Member_cms';
$route['cms/product'] = 'Product_cms';
$route['cms/banner'] = 'Banner_cms';
$route['cms/terms'] = 'Terms_cms';
$route['cms/about'] = 'About_cms';
$route['cms/privacy'] = 'Privacy_cms';
$route['cms/help'] = 'Help_cms';
$route['cms/contact'] = 'Contact_cms';
$route['cms/order'] = 'Order_cms';
$route['cms/order/status'] = 'Order_cms/status';
$route['cms/trial'] = 'Trial_cms';
$route['cms/trial/status'] = 'Trial_cms/status';
$route['cms/maintain'] = 'Maintain_Stock_cms';
$route['cms/maintain/addProductStock'] = 'Maintain_Stock_cms/addProductStock';
$route['cms/maintain/status'] = 'Maintain_Stock_cms/status';
$route['cms/footer'] = 'Footer_cms';

//Account URI Routing
$route['login'] = 'login';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
