<?php

require_once 'vendor/autoload.php';

use App\controller\MainController;

$controller = new MainController();
$controller->index();
