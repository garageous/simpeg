<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (is_file(SYSTEMPATH . 'Config/Routes.php')) {
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
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
//$routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.

$routes->get('/create-db', function(){
    $forge = \Config\Database::forge();
    if ($forge->createDatabase('simpeg')) {
        echo 'Database created!';
    }
});
$routes->get('/delete-db', function(){
    $forge = \Config\Database::forge();
    if ($forge->dropDatabase('simpeg')) {
        echo 'Database deleted!';
    }
});

$routes->get('/oretan', 'Home::oretan');

$routes->get('/login', 'LoginController::index');
$routes->post('/loginProcess', 'LoginController::loginProcess');

$routes->get('/', 'Home::index');
$routes->get('/dashboard', 'Home::index');
$routes->get('/staff/dashboard', 'Home::staff');
$routes->get('/gm/dashboard', 'Home::gm');
$routes->get('/HRD/dashboard', 'Home::hrd');

$routes->get('/staff/pendaftaran', 'AkunController::staff');
$routes->post('/staff/store', 'AkunController::store');
$routes->get('/staff/data-karyawan/(:any)', 'AkunController::detailKaryawan/$1');
$routes->get('/staff/edit-karyawan/(:any)', 'AkunController::editKaryawan/$1');

$routes->get('/struktur', 'StrukturController::index');
$routes->post('/tambah-struktur', 'StrukturController::store');
$routes->get('/posisi', 'PosisiController::index');

$routes->get('/cuti', 'CutiController::index');
$routes->post('/permohonan', 'CutiController::permohonan');
$routes->get('/staff/cuti', 'CutiController::lihatCuti');
$routes->get('/staff/detail-cuti/(:any)', 'CutiController::detailCuti/$1');
$routes->get('/gm/cuti', 'CutiController::approveCuti');

$routes->get('/training', 'TrainingController::index');
$routes->get('/staff/training', 'TrainingController::lihatTraining');
$routes->get('/gm/training', 'TrainingController::lihatTraining');

$routes->get('/resign', 'ResignController::index');
$routes->get('/staff/resign', 'ResignController::index');
$routes->get('/gm/resign', 'ResignController::index');

$routes->get('/staff/mutasi', 'MutasiController::index');
$routes->get('/gm/mutasi', 'MutasiController::index');

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
