<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['users/createdata'] = 'users/createdata';
$route['users/create'] = 'users/create';
$route['users/log'] = 'users/log';
$route['users/login'] = 'users/login';
$route['users'] = 'users/index';
$route['default_controller'] = 'users/index';
$route['(:any)'] = 'users/index/$1';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
