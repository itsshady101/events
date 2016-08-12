<?php

namespace App\Controllers;
use App\Models\Event;

class EventController extends Controller
{

	public function getEvent ($request, $response)
	{
		$this->container->view->render($response, 'form.twig');
	}

	public function postEvent ($request, $response)
	{
		// $img = $this->upload_image();
		$this->container->flash->addMessage('Event Created Successfully!');
		Event::create([
			'name' => $request->getParam('name'),
			'description' => $request->getParam('description'),
			'date' => $request->getParam('date'),
			'location' => $request->getParam('location'),
			'images' => 'images.png'
		]);
		$url = $this->container->router->pathFor('event.create');
		return $response->withHeader('Location', $url);
	}

    public function upload_image() {
        // Check if the file is img and size.
        if($_FILES['image']['type'] == "image/jpeg" || $_FILES['image']['type'] == "image/png" && ($_FILES['image']['size'] * 0.000000954) < 20) {
            $tmp_file = $_FILES['image']['tmp_name'];
            
            if ($_FILES['image']['type'] == "image/jpeg") {
                $extension = ".jpg";
            } elseif ($_FILES['image']['type'] == "image/png") {
                $extension = ".png";
            }
            
            $target_file = uniqid() . $extension;
            $upload_dir = "img/";
            if(move_uploaded_file($tmp_file, $upload_dir . $target_file)) {
                $image = "img/" . $target_file;
                return $image;
            } else {
                return false;
            }  
        }
        
        $_SESSION['error'] = "Please choose an image only.";
        return false;
    }


}