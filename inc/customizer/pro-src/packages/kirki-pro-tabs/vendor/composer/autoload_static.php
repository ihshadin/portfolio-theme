<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit56a8a99d8c63b9f1227717dc63c34409
{
    public static $prefixLengthsPsr4 = array (
        'K' => 
        array (
            'Kirki\\Pro\\Tabs\\' => 15,
            'Kirki\\Pro\\Field\\' => 16,
            'Kirki\\Pro\\Control\\' => 18,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Kirki\\Pro\\Tabs\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'Kirki\\Pro\\Field\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/Field',
        ),
        'Kirki\\Pro\\Control\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/Control',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit56a8a99d8c63b9f1227717dc63c34409::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit56a8a99d8c63b9f1227717dc63c34409::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit56a8a99d8c63b9f1227717dc63c34409::$classMap;

        }, null, ClassLoader::class);
    }
}
