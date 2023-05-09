<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit39eccd71181bda59b7a51d1420fda8a5
{
    public static $prefixLengthsPsr4 = array (
        'c' => 
        array (
            'core\\' => 5,
        ),
        'a' => 
        array (
            'app\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'core\\' => 
        array (
            0 => __DIR__ . '/../..' . '/core',
        ),
        'app\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit39eccd71181bda59b7a51d1420fda8a5::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit39eccd71181bda59b7a51d1420fda8a5::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit39eccd71181bda59b7a51d1420fda8a5::$classMap;

        }, null, ClassLoader::class);
    }
}
