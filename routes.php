<?php

	function call($controller, $action) {
		// require the file that matches the controller name
		require_once('controllers/' . $controller . '_controller.php');

		// create the new instance of the created controller
		switch($controller) {
			case 'pages':
				$controller = new PagesController();
			break;
			case 'posts':
			// we need the model to query the database later in the controller
				require_once('models/post.php');
				$controller = new PostsController();
			break;
			case 'about':
				$controller = new AboutController();
			break;
		}

		// call the action
		$controller->{ $action }();
	}

	// just a list of the controllers we have and their actions
	// we consider those 'allowed' values
	$controllers = array('pages' => ['home', 'error', 'about'],
						 'posts' => ['index', 'show'],
						 'about' => ['index']);


	// check that the requested controller and action are both allowed
	// if someone tries to access something else he will be redirected to the error action of the pages controller
	// checks wheather $controller is in $controllers or not
	if(array_key_exists($controller, $controllers)) {
		if(in_array($action, $controllers[$controller])) {
			call($controller, $action);
		} else {
			call('pages', 'error');
		}
	} else {
		call('pages', 'error');
	}

?>