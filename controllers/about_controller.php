<?php

	class AboutController {
		public function index() {
			$header = 'About';
			$sub_header = 'This is a simple blog using MVC in php, where you have to enter the data manually :p';
			require_once('views/about/index.php');
		}
	}

?>