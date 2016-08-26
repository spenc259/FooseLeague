<?php

/**
* Controller Class to handle loading data from models and rendering views
*/
class Controller
{
	
	function __construct()
	{
		
	}

	public function model($model)
	{
		require_once '../app/models/' . $model . '.php';

		return new $model();
	}

	public function view($view, $data = [])
	{
		require_once '../app/views/' . $view . '.php';
	}
}