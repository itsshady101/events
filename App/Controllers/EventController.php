<?php

namespace App\Controllers;
use App\Models\Event;

class EventController extends Controller
{
	public function hello ($request, $response) 
	{
	}

	public function getEvent ($request, $response)
	{
		$this->container->view->render($response, 'index.twig');
	}
}