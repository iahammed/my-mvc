<?php

$app = [];

$app['config']  = require 'config.php';

require 'Router.php';
require 'task.php';
require 'core/database/Connection.php';
require 'core/database/QueryBuilder.php';
require 'core/Request.php';
$config = require 'config.php';

$app['database'] = new QueryBuilder(
	Connection::make($config['database'])
);
