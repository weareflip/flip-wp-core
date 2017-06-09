<?php
use Composer\Autoload\ClassLoader;

/*
 * Core file autoloader.
 */

$loader = new ClassLoader();

container('action')->add('plugins_loaded', function () {
    $loader = container('loader')->add([ __DIR__.'/admin', __DIR__.'/helpers' ]);
    $loader->load();
});