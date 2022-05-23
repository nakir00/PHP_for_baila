<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd97eb35cad18f6f8b7e73abbc63608f3
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\Models\\' => 11,
            'App\\Exceptions\\' => 15,
            'App\\Core\\' => 9,
            'App\\Controllers\\' => 16,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\Models\\' => 
        array (
            0 => __DIR__ . '/../..' . '/models',
        ),
        'App\\Exceptions\\' => 
        array (
            0 => __DIR__ . '/../..' . '/exceptions',
        ),
        'App\\Core\\' => 
        array (
            0 => __DIR__ . '/../..' . '/core',
        ),
        'App\\Controllers\\' => 
        array (
            0 => __DIR__ . '/../..' . '/controllers',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitd97eb35cad18f6f8b7e73abbc63608f3::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd97eb35cad18f6f8b7e73abbc63608f3::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitd97eb35cad18f6f8b7e73abbc63608f3::$classMap;

        }, null, ClassLoader::class);
    }
}
