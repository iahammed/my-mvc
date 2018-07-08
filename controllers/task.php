<?php

$tasks = $app['database']->selectAll('tasks');

require 'views/task.view.php';


