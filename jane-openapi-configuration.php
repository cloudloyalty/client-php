<?php

return [
    'openapi-file' => __DIR__ . '/openapi.yaml',
    'namespace' => 'CloudLoyalty\Api',
    'directory' => __DIR__ . '/generated',
    'client' => 'psr18',
    'use-fixer' => true,
    'fixer-config-file' => '.php_cs.php',
];

