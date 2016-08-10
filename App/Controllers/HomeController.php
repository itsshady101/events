<?php

namespace App\Controllers;
use App\Models\Event;

class HomeController extends Controller
{
	public function index($request, $response) 
	{
		// $event = Event::create([
		// 	'name' => 'Event 69',
		// 	'description' => '69 69 69 69 69 69',
		// 	'date' => '2014-11-22',
		// 	'location' => 'Los Angeles',
		// 	'images' => 'image2.jpg'
		// ]);
		$event = Event::find(1)->name;
		var_dump($event);
		return $this->container->view->render($response, 'index.twig');
	}
}