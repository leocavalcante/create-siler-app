<?php declare(strict_types=1);

namespace App;

use Siler\Route;
use Siler\Http\Response;

require_once __DIR__ . '/bootstrap.php';

Route\get('/', static function () {
    $hw = new HelloWorld();
    Response\json($hw->greet());
});