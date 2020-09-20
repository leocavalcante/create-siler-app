<?php declare(strict_types=1);

namespace App;

use Siler\{Route, Http\Response};
use function Siler\Config\config;

Route\get('/', static function () {
    $hw = new Greeter((string)config('app.name'));
    Response\json($hw->greet());
});

if (!Route\did_match()) {
    Response\json('Not found', 404);
}
