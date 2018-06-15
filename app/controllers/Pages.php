<?php
	class Pages extends Controller{
		public function __construct(){
			//echo 'Pages loaded';  // Testing if default Controller is used. 
			$this->postModel = $this->model('Post');
		}

		public function index(){
			// $this->view('hello'); // Testig the view if it exists or not. The index method is default method. 

			$posts = $this->postModel->getPosts();

			$data = [
				'title' => 'Welcome',
				'posts' => $posts
			];

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