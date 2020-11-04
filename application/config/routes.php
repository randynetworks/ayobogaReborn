<?php
defined('BASEPATH') or exit('No direct script access allowed');

// memasak
$route['masak'] = 'belajar/belajar_masak';
$route['masak/(:any)'] = 'belajar/view_masak/$1';

// Dashboard
$route['dashboard'] = 'dashboard';
$route['dashboard/menus'] = 'dashboard/menus';

$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = false;
