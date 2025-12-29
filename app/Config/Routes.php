<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

// Auth routes
$routes->get('/auth/login', 'AuthController::login');
$routes->post('/auth/authenticate', 'AuthController::authenticate');
$routes->get('/auth/logout', 'AuthController::logout');

// Admin routes with auth filter
$routes->group('admin', ['filter' => 'auth'], function ($routes) {
    $routes->get('dashboard', 'AdminController::dashboard');
    $routes->get('news', 'NewsController::adminIndex');
    $routes->get('news/create', 'NewsController::create');
    $routes->post('news/store', 'NewsController::store');
    $routes->get('news/edit/(:num)', 'NewsController::edit/$1');
    $routes->post('news/update/(:num)', 'NewsController::update/$1');
    $routes->delete('news/delete/(:num)', 'NewsController::delete/$1');
    $routes->get('teachers', 'TeacherController::adminIndex');
    $routes->get('teachers/create', 'TeacherController::create');
    $routes->post('teachers/store', 'TeacherController::store');
    $routes->get('teachers/edit/(:num)', 'TeacherController::edit/$1');
    $routes->post('teachers/update/(:num)', 'TeacherController::update/$1');
    $routes->post('teachers/delete/(:num)', 'TeacherController::delete/$1');
    $routes->get('gallery', 'GalleryController::adminIndex');
    $routes->get('gallery/create', 'GalleryController::create');
    $routes->post('gallery/store', 'GalleryController::store');
    $routes->get('gallery/edit/(:num)', 'GalleryController::edit/$1');
    $routes->post('gallery/update/(:num)', 'GalleryController::update/$1');
    $routes->put('gallery/update/(:num)', 'GalleryController::update/$1');
    $routes->delete('gallery/delete/(:num)', 'GalleryController::delete/$1');
    $routes->get('contacts', 'ContactController::adminIndex');
    $routes->get('contacts/view/(:num)', 'ContactController::view/$1');
    $routes->get('contacts/mark-replied/(:num)', 'ContactController::markReplied/$1');
    $routes->delete('contacts/delete/(:num)', 'ContactController::delete/$1');
    $routes->get('announcements', 'AnnouncementController::adminIndex');
    $routes->get('announcements/create', 'AnnouncementController::create');
    $routes->post('announcements/store', 'AnnouncementController::store');
    $routes->get('announcements/edit/(:num)', 'AnnouncementController::edit/$1');
    $routes->post('announcements/update/(:num)', 'AnnouncementController::update/$1');
    $routes->put('announcements/update/(:num)', 'AnnouncementController::update/$1');
    $routes->delete('announcements/delete/(:num)', 'AnnouncementController::delete/$1');
    $routes->get('events', 'EventController::adminIndex');
    $routes->get('events/create', 'EventController::create');
    $routes->post('events/store', 'EventController::store');
    $routes->get('events/edit/(:num)', 'EventController::edit/$1');
    $routes->post('events/update/(:num)', 'EventController::update/$1');
    $routes->put('events/update/(:num)', 'EventController::update/$1');
    $routes->match(['post', 'delete'], 'events/delete/(:num)', 'EventController::delete/$1');
    $routes->get('users', 'AdminController::users');
    $routes->delete('users/delete/(:num)', 'AdminController::deleteUser/$1');
    $routes->get('categories', 'CategoryController::adminIndex');
    $routes->get('categories/create', 'CategoryController::create');
    $routes->post('categories/store', 'CategoryController::store');
    $routes->get('categories/edit/(:num)', 'CategoryController::edit/$1');
    $routes->post('categories/update/(:num)', 'CategoryController::update/$1');
    $routes->delete('categories/delete/(:num)', 'CategoryController::delete/$1');
});


// Public routes
$routes->get('/news', 'NewsController::index');
$routes->get('/news/(:segment)', 'NewsController::show/$1');
$routes->get('/announcements', 'AnnouncementController::index');
$routes->get('/announcements/(:segment)', 'AnnouncementController::show/$1');
$routes->get('/teachers', 'TeacherController::index');
$routes->get('/teachers/(:num)', 'TeacherController::show/$1');
$routes->get('/gallery', 'GalleryController::index');
$routes->get('/gallery/(:num)', 'GalleryController::show/$1');
$routes->get('/contact', 'ContactController::index');
$routes->post('/contact', 'ContactController::store');
$routes->get('/profile', 'ProfileController::index');
$routes->get('/profile/identity', 'ProfileController::identity');
$routes->get('/profile/vision', 'ProfileController::vision');
$routes->get('/profile/history', 'ProfileController::history');
$routes->get('/profile/structure', 'ProfileController::structure');
$routes->get('/profile/facilities', 'ProfileController::facilities');

// SEO routes
$routes->get('/sitemap.xml', 'SeoController::sitemap');
$routes->get('/robots.txt', 'SeoController::robots');

// SEO routes
$routes->get('/sitemap.xml', 'SeoController::sitemap');
$routes->get('/robots.txt', 'SeoController::robots');
