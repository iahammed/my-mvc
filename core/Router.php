<?php

class Router {

	// protected $routes = [];

	public $routes = [
		'GET'	=> 	[],
		'POST'	=>	[]
	];

	public static function load($file)
	{
		$router = new static;

		require $file;

		return $router; 
	}

	public function get($uri,$controller){
		$this->routes['GET'][$uri] = $controller;
	}

	public function post($uri,$controller){
		$this->routes['POST'][$uri] = $controller;
	}

	// public function define($routes)
	// {
	// 	return $this->routes = $routes;
	// }

	public function direct($uri, $requestType)
	{
		if(array_key_exists($uri, $this->routes[$requestType])){
			// var_dump($uri);
			return $this->routes[$requestType][$uri];
		} else {
			return $this->routes['GET']['404'];
		}
		throw new Exception("No route defined");
		
	}

}