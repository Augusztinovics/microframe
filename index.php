<?php
require __DIR__ . '/bootstrap.php';

use Core\Dispatcher;

ob_start();
$view = Dispatcher::dispatch();
require __DIR__ . '/views/layout/main.php';
ob_end_flush();
?>
