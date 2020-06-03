<?php
defined('BASEPATH') or exit('No direct script access allowed');

//Default URL Routing
$route['default_controller'] = 'home';
$route['home'] = 'home';
// $route['about'] = 'home/about';
$route['courses/list/:any'] = 'Courses/coursesList';
$route['courses/list/prakerja'] = 'Courses/coursesList';
$route['courses/:any/:any'] = 'Courses';
$route['artikel/:any'] = 'home/artikel';
$route['courses/search'] = 'Courses/searchCourses';
$route['courses'] = 'Courses/allCourse';
$route['blog'] = 'home/blog';
$route['blogdetail'] = 'home/blogdetail';
$route['elements'] = 'home/elements';
$route['kartu_prakerja'] = 'home/kartu_prakerja';
$route['artikel'] = 'home/artikel';
$route['instruktur'] = 'Instructor';

//Profile Section
$route['profile/user-profile'] = 'Profile/editProfile';
$route['profile/user-class'] = 'Profile/editClass';
$route['profile/help'] = 'Profile/helpDesk';

// $route['policy'] = "Home/policy";
$route['terms'] = "Home/terms";
$route['faq'] = "Home/faq";
$route['privacy'] = "Home/privacy";
$route['about-us'] = "Home/aboutUs";
$route['contact'] = 'Contact';
$route['pencari-kerja'] = 'home/pencari_kerja';
$route['umkm'] = 'home/umkm';
$route['ojek-online']           = 'home/ojek_online';
$route['industri-pariwisata']   = 'home/industri_pariwisata';

//Instructor CMS Route
$route['instruktur/cms']            = 'InstructorCMS/dashboard';
$route['instruktur/cms/dashboard']  = 'InstructorCMS/dashboard';
$route['instruktur/cms/login']      = 'InstructorCMS/login';


//Account URI Routing
$route['login'] = 'login';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
