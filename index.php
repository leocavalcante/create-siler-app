<?php declare(strict_types=1);

namespace App;

use Siler\{Route, Http\Response};

global $etc;

Route\get('/', static function () use ($etc) {
    $hw = new Greeter($etc['app']['name']);
    Response\json($hw->greet());
});

if (!Route\did_match()) {
    Response\json('Not found', 404);
}
