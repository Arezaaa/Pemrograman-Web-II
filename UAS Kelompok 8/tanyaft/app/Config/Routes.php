<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->setAutoRoute(true);
$routes->get('/', 'Home::index');
$routes->get('/eresponse', 'Home::eresponse');
$routes->get('/dashboard', 'Home::index');
$routes->get('/tanyaft', 'TanyaFT::main');
$routes->get('/pengajuan/tambah','TanyaFT::pengajuan');
$routes->get('/pengajuan/tanggapan/(:any)','TanyaFT::tanggapan/$1');
$routes->get('/pengajuan/detailPengajuan/(:any)','TanyaFT::detailPengajuan/$1');
$routes->post('/pengajuan/submit', 'TanyaFT::submit');

service('auth')->routes($routes);
