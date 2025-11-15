<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();


// ===================================================================
// START: ROUTING UNTUK CV SHINTA LAVERA (FINAL MULTI-URL SCROLL)
// ===================================================================

// Halaman 4 utama
$routes->get('/', 'CvController::index');
$routes->get('/pendidikan', 'CvController::pendidikan');
$routes->get('/pengalaman', 'CvController::pengalaman');
$routes->get('/keahlian', 'CvController::keahlian');

// ===================================================================
// END: ROUTING UNTUK CV SHINTA LAVERA
// ===================================================================