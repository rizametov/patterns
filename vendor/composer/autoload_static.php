<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit67f0e0d3dfff330b986966a1d5d4d4ac
{
    public static $prefixLengthsPsr4 = array (
        'G' => 
        array (
            'GoF\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'GoF\\' => 
        array (
            0 => __DIR__ . '/../..' . '/GoF',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit67f0e0d3dfff330b986966a1d5d4d4ac::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit67f0e0d3dfff330b986966a1d5d4d4ac::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit67f0e0d3dfff330b986966a1d5d4d4ac::$classMap;

        }, null, ClassLoader::class);
    }
}
