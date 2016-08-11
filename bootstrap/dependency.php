<?php

$container = $app->getContainer();

// Twig Views
$container['view'] = function ($container) {
	$view = new \Slim\Views\Twig(__DIR__ . '/../resources/views', [
		'cache' => false,
	]);

	$view->addExtension(new \Slim\Views\TwigExtension(
		$container->router,
		$container->request->getUri()
	));

	return $view;
};

// Controllers
$container['HomeController'] = function ($container) {
	return new \App\Controllers\HomeController($container);
};

$container['EventController'] = function ($container) {
	return new \App\Controllers\EventController($container);
};

// CSRF
$container['csrf'] = function ($container) {
	return new \Slim\Csrf\Guard;
};