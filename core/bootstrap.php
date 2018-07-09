<?php

// require 'Router.php';
// require 'task.php';
// require 'core/database/Connection.php';
// require 'core/database/QueryBuilder.php';
// require 'core/Request.php';

// $config = require 'config.php';
// $app = [];
// $app['config']  = require 'config.php';



// $app['database'] = new QueryBuilder(
// 	Connection::make($config['database'])
// );


App::bind('config', require 'config.php');
	
// die(var_dump(App::get('config')));

App::bind('database', new QueryBuilder(
	Connection::make(App::get('config')['database'])
));


