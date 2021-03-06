<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit47f8cb15a8327f3fcd60afc9c70e2fd1
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit47f8cb15a8327f3fcd60afc9c70e2fd1::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit47f8cb15a8327f3fcd60afc9c70e2fd1::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit47f8cb15a8327f3fcd60afc9c70e2fd1::$classMap;

        }, null, ClassLoader::class);
    }
}
