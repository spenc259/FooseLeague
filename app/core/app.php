<?php

/**
* The App Class is used to initialise the app
*/
class App
{
	
	protected $controller = 'home';

	protected $method = 'index';

	protected $params = [];

	public function __construct()
	{
		$url = $this->parseUrl();

		if (file_exists('../app/controllers/' . $url[0] . '.php')) 
		{
			$this->controller = $url[0]; //overrides the default controller with the requested controller
			unset($url[0]); //resets the controller, removes it from the array given in the url path ie /home/index/param1 where home is the controller requested
		}

		require_once '../app/controllers/' . $this->controller . '.php'; // Set the required file to be the requested controller

		$this->controller = new $this->controller;

		if (isset($url[1])) 
		{
			if (method_exists($this->controller, $url[1])) 
			{
				$this->method = $url[1];
				unset($url[1]);
			}
		}

		$this->params = $url ? array_values($url) : [];

		call_user_func_array([$this->controller, $this->method], $this->params);
	}

	protected function parseUrl() 
	{
		if (isset($_GET['url'])) {
			//echo $_GET['url'];
			return $url = explode('/', filter_var(rtrim($_GET['url'], '/'), FILTER_SANITIZE_URL));
		}
	}
}