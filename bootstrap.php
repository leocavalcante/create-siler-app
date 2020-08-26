<?php declare(strict_types=1);

namespace App;

use Monolog\Handler\StreamHandler;
use Noodlehaus\Config;
use Siler\Monolog as Log;

global $etc;

require_once __DIR__ . '/vendor/autoload.php';

Log\handler(new StreamHandler('php://stdout'));
$etc = Config::load(__DIR__ . '/etc');
