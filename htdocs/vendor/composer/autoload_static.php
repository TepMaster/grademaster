<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit5abc8bafa83858d916776e25a1ac1e84
{
    public static $prefixesPsr0 = array (
        'B' => 
        array (
            'Bramus' => 
            array (
                0 => __DIR__ . '/..' . '/bramus/router/src',
            ),
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInit5abc8bafa83858d916776e25a1ac1e84::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit5abc8bafa83858d916776e25a1ac1e84::$classMap;

        }, null, ClassLoader::class);
    }
}
