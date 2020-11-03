<?php
defined('BASEPATH') or exit('No direct script access allowed');

// memasak
$route['masak'] = 'belajar/belajar_masak';
$route['masak/(:any)'] = 'belajar/view_masak/$1';

// service
// $route['service'] = 'belajar/belajar_service';
// $route['service/(:any)'] = 'belajar/view_service/$1';

$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = false;
