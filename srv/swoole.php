<?php declare(strict_types=1);

namespace App;

use Siler\Swoole;
use Swoole\Runtime;

global $etc;

require_once __DIR__ . '/../bootstrap.php';

Runtime::enableCoroutine();

$server = Swoole\http(static function () use ($etc): void {
    require __DIR__ . '/../index.php';
});

$server->set(['worker_num' => swoole_cpu_num()]);
$server->start();
