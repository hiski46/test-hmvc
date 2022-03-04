<?php

if(!isset($routes))
{ 
    $routes = \Config\Services::routes(true);
}


$routes->group('auth', ['namespace' => 'App\Modules\Core\Controllers'], function ($routes) {
	$routes->add('login', 'Auth::login');
	$routes->get('logout', 'Auth::logout');
	$routes->add('forgot_password', 'Auth::forgot_password');
	$routes->get('/', 'Auth::index');
	$routes->add('create_user', 'Auth::create_user');
	$routes->add('edit_user/(:num)', 'Auth::edit_user/$1');
	$routes->add('create_group', 'Auth::create_group');
	$routes->get('activate/(:num)', 'Auth::activate/$1');
	$routes->get('activate/(:num)/(:hash)', 'Auth::activate/$1/$2');
	$routes->add('deactivate/(:num)', 'Auth::deactivate/$1');
	$routes->get('reset_password/(:hash)', 'Auth::reset_password/$1');
	$routes->post('reset_password/(:hash)', 'Auth::reset_password/$1');
	$routes->get('permission_list', 'PermissionList::index');
	$routes->add('permission/add_permission', 'AddPermission::index');
	$routes->add('permission/create_permission', 'AddPermission::CreatePermission');
	$routes->get('permission/delete_permission/(:num)', 'PermissionList::DeletePermission/$1');
	$routes->add('permission/edit_permission/(:num)', 'AddPermission::EditPermission/$1');
	$routes->add('permission/edit_permission/update_permission/(:num)', 'AddPermission::UpdatePermission/$1');
});