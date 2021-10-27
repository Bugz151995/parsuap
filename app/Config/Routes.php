<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Alumni');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->group('/', function($routes){
    $routes->post('login', 'Alumni::login');
    $routes->get('logout', 'Alumni::logout');
    $routes->get('home', 'Home::index');
    $routes->get('events', 'Event::index');
    $routes->get('friends', 'Friend::index');
    $routes->get('archive', 'Archive::index');
    $routes->get('account', 'Account::index');

    $routes->group('forum', function($routes){
        $routes->get('/', 'Forum::index');
        $routes->get('topic/(:num)', 'Forum::viewPosts/$1');
        $routes->post('create_topic', 'Forum::createTopic');
        $routes->post('topic/create_post', 'Forum::createPost');
    });

    $routes->group('registration', function($routes){
        $routes->get('(:segment)', 'Registration::view/$1');
        $routes->post('getName', 'Registration::getName');
        $routes->post('getBatchType', 'Registration::getBatchType');
        $routes->post('getBatchYear', 'Registration::getBatchYear');
        $routes->post('getBirthdate', 'Registration::getBirthdate');
        $routes->post('getGender', 'Registration::getGender');
        $routes->post('getEmail', 'Registration::getEmail');
        $routes->post('getPassword', 'Registration::getPassword');
        $routes->get('account/submit', 'Registration::createAccount');
    });    
});

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
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
