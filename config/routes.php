<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$route['clients/create']='clients/create';
$route['clients/(:any)']='clients/view/$1';
$route['clients']='clients/index';
$route['posts/create']='posts/create';
$route['posts/(:any)']='posts/view/$1';
$route['posts']='posts/index';
$route['default_controller'] = 'pages/view';
$route['(:any)']='pages/view/$1';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
