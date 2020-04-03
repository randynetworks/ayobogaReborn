<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// memasak
$route['masak'] = 'belajar/belajar_masak';
$route['masak/(:any)'] = 'belajar/view/$1';

// service
$route['service'] = 'belajar/belajar_service';
$route['service/(:any)'] = 'belajar/belajar_service/$1';

$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
