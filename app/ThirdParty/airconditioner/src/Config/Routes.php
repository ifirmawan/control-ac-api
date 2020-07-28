<?php namespace AirConditioner\Config;

$routes->group('ac', ['namespace' => 'AirConditioner\Controllers'], function ($routes) {
	$routes->get('show/(:num)', 'RemoteAirConditioner::show/$1', ['as' => 'ac.show']);
	$routes->post('store', 'RemoteAirConditioner::store', ['as' => 'ac.store']);
});

$routes->group('classroom', ['namespace' => 'AirConditioner\Controllers'], function ($routes) {
	// URI: /class-room
	$routes->get('', 'ClassRoom::index', ['as' => 'classroom.index']);
	$routes->get('create', 'ClassRoom::create', ['as' => 'classroom.create']);
	$routes->delete('delete/(:num)', 'ClassRoom::delete/$1', ['as' => 'classroom.delete']);
	$routes->post('store', 'ClassRoom::store', ['as' => 'classroom.store']);
	$routes->match(['get', 'post'], 'edit/(:num)', 'ClassRoom::edit/$1', ['as' => 'classsroom.edit']);
});
