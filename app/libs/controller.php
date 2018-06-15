<?php
	/*
	* Base Controller 
	* Loads the models and views
	*/
	class Controller{
		// Load model
		public function model($model){
			// Require model file 
			require_once '../app/models/' . $model . '.php';

			// Instantiate the model 
			return new $model();
		}

		// Load view 
		public function view($view){
			
		}
	}