<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['requests'] = 'requests/index';
$route['checkedOut'] = 'checkedOut/index';
$route['checkedIn'] = 'checkedIn/index';
$route['requestForm'] = 'requestForm/index';
$route['default_controller'] = 'pages/view';
$route['(:any)'] = 'pages/view/$1';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
