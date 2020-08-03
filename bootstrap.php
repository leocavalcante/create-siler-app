<?php declare(strict_types=1);

namespace App;

use Monolog\Handler\NoopHandler;
use Siler\Monolog as Log;
use Symfony\Component\Dotenv\Dotenv;

require_once __DIR__ . '/vendor/autoload.php';

Log\handler(new NoopHandler());
(new Dotenv())->loadEnv(__DIR__ . '/.env');

//
// Doctrine MongoDB Document Mapper
// composer require doctrine/mongodb-odm
// https://www.doctrine-project.org/projects/mongodb-odm.html
//
// $mongo_db = new Client($_ENV['MONGODB_CONN_STR'], [], ['typeMap' => DocumentManager::CLIENT_TYPEMAP]);
// $dm_config = new Configuration();
// $dm_config->setDefaultDB($_ENV['MONGODB_DEFAULT_DB']);
// $dm_config->setMetadataDriverImpl(AnnotationDriver::create(__DIR__ . '/src'));
// $dm_config->setHydratorDir(__DIR__ . '/src/generated');
// $dm_config->setHydratorNamespace('App\Hydrator');
// $dm = DocumentManager::create($mongo_db, $dm_config);