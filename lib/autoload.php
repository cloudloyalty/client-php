<?php

function clApiLoadClass($className)
{
    if (strncmp('CloudLoyalty\\Api', $className, 16) === 0) {
        $path = dirname(__FILE__);
        $path .= str_replace('\\', '/', substr($className, 16)) . '.php';
        if (file_exists($path)) {
            require $path;
        }
    }
}

spl_autoload_register('clApiLoadClass');
