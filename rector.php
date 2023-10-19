<?php

use Rector\Config\RectorConfig;
use Rector\Php70\Rector\ClassMethod\Php4ConstructorRector;

return static function (RectorConfig $rectorConfig): void {
    $rectorConfig->paths([__DIR__ . '/src/foo.php']);
    // register single rule
    $rectorConfig->rule(Php4ConstructorRector::class);
};
