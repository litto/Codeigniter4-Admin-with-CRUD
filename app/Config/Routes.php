<?php namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php'))
{
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
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

/**
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');
// $routes->get('news/(:segment)', 'News::view/$1');
// $routes->get('news', 'News::index');
// $routes->get('(:any)', 'Pages::view/$1');
$routes->get('auth/cms', 'Cms::admin_list');
$routes->get('auth/cms/list/', 'Cms::admin_list');
$routes->add('auth/cms/list/', 'Cms::admin_list');
$routes->add('auth/cms/create/', 'Cms::create');
$routes->add('auth/cms/edit/(:any)', 'Cms::edit/$1');
$routes->get('auth/cms/del_record/(:any)', 'Cms::del_record/$1');
$routes->get('auth/cms/publish_record/(:any)', 'Cms::publish_record/$1');
$routes->get('auth/cms/unpublish_record/(:any)', 'Cms::unpublish_record/$1');


$routes->group('auth', ['namespace' => 'IonAuth\Controllers'], function ($routes) {
	$routes->get('/', 'Auth::index');
	$routes->add('login', 'Auth::login');
	$routes->get('logout', 'Auth::logout');
	$routes->get('forgot_password', 'Auth::forgot_password');
});

$routes->group('admin', ['namespace' => 'Admin\Controllers'], function ($routes) {
	$routes->get('/', 'Home::index');

	$routes->group('users', ['namespace' => 'Admin\Controllers'], function ($routes) {
		$routes->get('/', 'Users::index');
		$routes->add('create', 'Users::createUser');
		$routes->add('edit/(:num)', 'Users::edit/$1');
		$routes->add('activate/(:num)', 'Users::activate/$1');
		$routes->add('deactivate/(:num)', 'Users::deactivate/$1');
		$routes->add('edit_group/(:num)', 'Users::editGroup/$1');
		$routes->add('create_group', 'Users::createGroup');
	});

	$routes->group('informations', ['namespace' => 'Admin\Controllers'], function ($routes) {
		$routes->get('/', 'Informations::index');
		$routes->get('displayPhpInfo', 'Informations::displayPhpInfo');
		$routes->add('exportDatabase', 'Informations::exportDatabase');
		$routes->post('sendEmailForTest', 'Informations::sendEmailForTest');
	});
});
/**
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need to it be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php'))
{
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
