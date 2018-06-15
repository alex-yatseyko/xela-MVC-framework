<?php
	class Pages extends Controller{
		public function __construct(){
			//echo 'Pages loaded';  // Testing if default Controller is used. 
		}

		public function index(){
			// $this->view('hello'); // Testig the view if it exists or not. The index method is default method. 
			$data = ['title' => '
			Welcome'];

			$this->view('pages/index', $data);
		}

		public function about() {
			//echo 'This is about' . $id; //Testing of Id if it is passed in this function.
			
			//$this->view('pages/about');
			$data = ['title' => '
			About Us'];

			$this->view('pages/about', $data);
		}
	}