<?php namespace AirConditioner\Config;

$routes->group('ac', ['namespace' => 'AirConditioner\Controllers'], function ($routes) {
	// URI: /air-conditioner
	$routes->get('show/(:num)', 'RemoteAirConditioner::show/$1', ['as' => 'ac.index']);
	// URI: /air-conditioner/add
	//$routes->match(['get', 'post'], 'add', 'AirConditioner::add', ['as' => 'ac-add']);
});

$routes->group('classroom', ['namespace' => 'AirConditioner\Controllers'], function ($routes) {
	// URI: /class-room
	$routes->get('', 'ClassRoom::index', ['as' => 'classroom.index']);
	$routes->get('add', 'ClassRoom::create', ['as' => 'classroom.show']);
});
