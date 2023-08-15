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
// => default controller
$routes->get('/dashboard', 'DashboardController::index',['as' => 'dashboard']);

$routes->get('/book', 'BookController::index',['as' => 'book']);
$routes->get('/book/create', 'BookController::create',['as' => 'book-create']);
$routes->post('/book/store', 'BookController::store',['as' => 'book-store']);
$routes->get('/book/edit/(:num)', 'BookController::edit/$1',['as' => 'book-edit']);
$routes->post('/book/update', 'BookController::update',['as' => 'book-update']);
$routes->get('/book/delete/(:num)', 'BookController::delete/$1',['as' => 'book-delete']);


$routes->get('/film', 'FilmController::index',['as' => 'film']);
$routes->get('/film/edit/(:num)', 'FilmController::edit/$1',['as' => 'film-edit']);
$routes->get('/film/delete/(:num)', 'FilmController::delete/$1',['as' => 'film-delete']);
$routes->get('/film/create', 'FilmController::create',['as' => 'film-create']);
$routes->post('/film/store', 'FilmController::store',['as' => 'film-store']);
$routes->post('/film/update', 'FilmController::update',['as' => 'film-update']);


$routes->get('/food', 'FoodController::index',['as' => 'food']);
$routes->get('/food/edit/(:num)', 'FoodController::edit/$1',['as' => 'food-edit']);
$routes->get('/food/delete/(:num)', 'FoodController::delete/$1',['as' => 'food-delete']);
$routes->get('/food/create', 'FoodController::create',['as' => 'food-create']);
$routes->post('/food/store', 'FoodController::store',['as' => 'food-store']);
$routes->post('/food/update', 'FoodController::update',['as' => 'food-update']);


$routes->get('/genre', 'GenreController::index',['as' => 'genre']);
$routes->get('/genre/edit/(:num)', 'GenreController::edit/$1',['as' => 'genre-edit']);
$routes->get('/genre/delete/(:num)', 'GenreController::delete/$1', ['as' => 'genre-delete']);
$routes->get('/genre/create', 'GenreController::create',['as' => 'genre-create']);
$routes->post('/genre/store', 'GenreController::store',['as' => 'genre-store']);
$routes->post('/genre/update', 'GenreController::update',['as' => 'genre-update']);


$routes->get('/sewa_buku', 'Sewa_BukuController::index',['as' => 'sewa_buku']);
$routes->get('/sewa_buku/edit/(:num)', 'Sewa_BukuController::edit/$1',['as' => 'sewa_buku-edit']);
$routes->get('/sewa_buku/delete/(:num)', 'Sewa_BukuController::delete/$1', ['as' => 'sewa_buku-delete']);
$routes->get('/sewa_buku/create', 'Sewa_BukuController::create',['as' => 'sewa_buku-create']);
$routes->post('/sewa_buku/store', 'Sewa_BukuController::store',['as' => 'sewa_buku-store']);
$routes->post('/sewa_buku/update', 'Sewa_BukuController::update',['as' => 'sewa_buku-update']);


$routes->get('/sewa_film', 'Sewa_FilmController::index',['as' => 'sewa_film']);
$routes->get('/sewa_film/edit(:num)', 'Sewa_FilmController::edit/$1',['as' => 'sewa_film-edit']);
$routes->get('/sewa_film/delete(:num)', 'Sewa_FilmController::delete/$1',['as' => 'sewa_film-delete']);
$routes->get('/sewa_film/create', 'Sewa_FilmController::create',['as' => 'sewa_film-create']);
$routes->post('/sewa_film/store', 'Sewa_FilmController::store',['as' => 'sewa_film-store']);
$routes->post('/sewa_film/update', 'Sewa_FilmController::update',['as' => 'sewa_film-update']);

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
