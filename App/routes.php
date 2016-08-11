<?php

$app->get('/', 'HomeController:index');

$app->group('/events', function() {
	$this->get('/create', 'EventController:getEvent');
	$this->post('/create', 'EventController:postEvent');
});