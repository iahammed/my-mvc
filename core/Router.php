<?php

class Router {

	protected $routes;

	public static function load($file)
	{
		$router = new static;

		require $file;

		return $router; 
	}

	public function define($routes)
	{
		return $this->routes = $routes;
	}

	public function direct($uri)
	{
		if(array_key_exists($uri, $this->routes)){
			// var_dump($uri);
			return $this->routes[$uri];
		} else {
			return $this->routes['404'];
		}
		throw new Exception("No route defined");
		
	}

}