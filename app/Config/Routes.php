<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');

// $routes->get('/test', 'Test');

// $routes->resource('api/login', ['controller' => 'LoginController']);
// $routes->resource('api/user', ['controller' => 'Api\UserController']);

 $routes->get('/student', 'StudentController');
 $routes->get('/student/create', 'StudentController::create');
 $routes->get('/student/new', 'StudentController::new');
 $routes->post('/student/new', 'StudentController::new');
 $routes->get('/login', 'LoginController');
 $routes->post('/login', 'LoginController');
 $routes->get('/login/isloggedin', 'LoginController::isLoggedIn');

 $routes->get('/faculty', 'FacultyController');
 $routes->get('/faculty/new', 'FacultyController::new');
 $routes->post('/faculty/new', 'FacultyController::new');
 $routes->get('/faculty/edit', 'FacultyController::edit');
 $routes->post('/faculty/edit', 'FacultyController::edit');
$routes->get('/faculty/delete', 'FacultyController::delete');

$routes->get('/user/create', 'UserController::create');
$routes->get('/user/login', 'UserController::login');
$routes->post('/user/login', 'UserController::login');
$routes->get('/user/logout', 'UserController::logout');


$routes->get('/subject', 'SubjectController');
$routes->get('/subject/new', 'SubjectController::new');
$routes->post('/subject/new', 'SubjectController::new');

/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
