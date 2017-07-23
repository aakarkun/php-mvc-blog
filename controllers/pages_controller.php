<?php

	class PagesController {
		public function home() {
			$header = 'Blog';
			$sub_header = 'PHP | MVC';
			require_once('views/pages/home.php');
		}

		public function error() {
			require_once('views/pages/error.php');
		}
	}


?>