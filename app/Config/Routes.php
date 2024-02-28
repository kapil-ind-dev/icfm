<?php

use CodeIgniter\Router\RouteCollection;
use App\Controllers\Admin\Login;


$routes->get('/', 'Home::index');
$routes->get('/admin/login', 'Login::index');
