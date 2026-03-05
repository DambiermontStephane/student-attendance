<?php

use Attendances\Controllers\AttendanceController;
use Attendances\Controllers\HomeController;
use Attendances\Controllers\StudentController;

require __DIR__ . '/../bootstrap/app.php';

require VENDOR_PATH . '/autoload.php';
$dotenv = Dotenv\Dotenv::createImmutable(ROOT_PATH);
$dotenv->load();

switch ($_SERVER['REQUEST_URI']) {
    case '':
    case '/':
        HomeController::index();
        /*
         * Appel de la méthode index() via une instance
         * Ne marche que si la méthode n'est pas déclarée statique
         * $controller = new HomeController();
         * $controller->index();
        */
        break;
    case '/presences':
        AttendanceController::index();
        break;
    case '/etudiants':
        StudentController::index();
        break;
    default:
        $title = '404';
        include VIEWS_PATH . '/404.blade.php';
}
