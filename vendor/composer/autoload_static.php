<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit7ca4ec30ed2853d1c69314eb7428434e
{
    public static $prefixLengthsPsr4 = array (
        'a' => 
        array (
            'app\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'app\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'app\\interfaces\\CartInterface' => __DIR__ . '/../..' . '/app/interfaces/CartInterface.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit7ca4ec30ed2853d1c69314eb7428434e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit7ca4ec30ed2853d1c69314eb7428434e::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit7ca4ec30ed2853d1c69314eb7428434e::$classMap;

        }, null, ClassLoader::class);
    }
}
