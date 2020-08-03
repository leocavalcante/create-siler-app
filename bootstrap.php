<?php declare(strict_types=1);

namespace App;

use Monolog\Handler\NoopHandler;
use Siler\Monolog as Log;
use Symfony\Component\Dotenv\Dotenv;

require_once __DIR__ . '/vendor/autoload.php';

Log\handler(new NoopHandler());
(new Dotenv())->loadEnv(__DIR__ . '/.env');