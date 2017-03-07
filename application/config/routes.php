<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$route['default_controller'] = "users";
$route['404_override'] = '';
$route['login'] = "users/login";
$route['logout'] = "users/logout";
$route['profile'] = "users/profile";
$route['register'] = "users/register";
$route['pokeUser'] = "pokes/pokeUser";

?>