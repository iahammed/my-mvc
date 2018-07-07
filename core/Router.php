<?php

class Router {

	protected $routes;

	public function define($routes)
	{
		return $this->routes = $routes;
	}

	public function direct($uri)
	{
		if(array_key_exists($uri, $this->routes)){
			// var_dump($uri);
			return $this->routes[$uri];
		}
		throw new Exception("No route defined");
		
	}

}