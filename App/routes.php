<?php

$app->get('/', 'HomeController:index');

$app->group('/events', function() {
	$this->get('/create', 'EventController:getEvent')->setName('event.create');
	$this->post('/create', 'EventController:postEvent')->setName('post.event');
});