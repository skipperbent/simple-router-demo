<?php
/**
 * This file contains all the routes for the project
 */

use Demo\Router;

Router::csrfVerifier(new \Demo\Middlewares\CsrfVerifier());

Router::group(['namespace' => 'Demo\Controllers', 'exceptionHandler' => 'Demo\Handlers\CustomExceptionHandler'], function () {

	Router::get('/', 'DefaultController@home')->setName('home');

	Router::get('/contact', 'DefaultController@contact')->setName('contact');

	Router::basic('/companies/{id?}', 'DefaultController@companies')->setName('companies');

	// Api
	Router::group(['prefix' => '/api', 'middleware' => 'Demo\Middlewares\ApiVerification'], function () {
		Router::resource('/demo', 'ApiController');
	});

});