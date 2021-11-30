<?php

use Doctrine\DBAL\Driver\PDOMySql\Driver;
use DoctrineExtensions\Query\Mysql\UtcTimestamp;
use DoctrineExtensions\Query\Mysql\UnixTimestamp;
use DoctrineExtensions\Query\Mysql\Date;

/**
 * Deployment database configuration
 */

return [
    'doctrine' => [
        'configuration' => [
            'orm_default' => [
                'generate_proxies' => true,
                'metadata_cache' => 'array',
                'query_cache' => 'array',
                'result_cache' => 'array',
                'datetime_functions' => [
                    'date' => Date::class,
                    'unix_timestamp' => UnixTimestamp::class,
                    'utc_timestamp' => UtcTimestamp::class,
                ],
                'string_functions' => [
                    'substring_index' => \DoctrineExtensions\Query\Mysql\SubstringIndex::class,
                    'match' => DoctrineExtensions\Query\Mysql\MatchAgainst::class,
                ],
            ],
        ],

        'connection' => [
            'orm_default' => [
                'driverClass' => Driver::class,
                'params' => [
                    'host' => '127.0.0.1',
                    'user' => 'root',
                    'password' => '',
                    'dbname' => 'projectskills',
                    'port' => '3306',
                    'driverOptions' => [
                        1002 => 'SET NAMES utf8',
                    ],
                ],
            ],
        ],
    ],
];
