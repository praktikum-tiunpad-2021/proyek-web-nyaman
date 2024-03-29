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
$routes->setDefaultController('Home');
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
$routes->get('/', 'Home::index');
$routes->get('/Search', 'Halaman::viewSearch');
$routes->get('/Sign-In', 'Login::index');
$routes->get('/Sign-Up', 'Login::viewSignUp');
$routes->get('/Profil', 'Login::viewProfil');
$routes->get('/list-kamar', 'ListKamar::index');
$routes->get('/list-kamar/edit/(:segment)', 'ListKamar::edit/$1');
$routes->delete('/list-kamar/(:num)', 'ListKamar::delete/$1');
$routes->get('/list-kamar/(:any)', 'ListKamar::detailKamar/$1');
$routes->get('/tambah-kamar', 'ListKamar::create');
$routes->get('/editProfil', 'Login::editProfil');
$routes->get('/bookKamar/(:any)', 'ListKamar::book/$1');
$routes->get('/bukti-bayar/(:any)', 'ReservasiKamar::bukti/$1');
$routes->get('/no-kamar', 'ListKamar::noKamar');
$routes->get('/reservasi', 'ReservasiKamar::ReservasiUser');
$routes->get('/data-reservasi', 'ReservasiKamar::dataReservasi');
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
