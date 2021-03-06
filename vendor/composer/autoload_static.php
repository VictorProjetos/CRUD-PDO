<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc760143d74673fc1c1a1dd1269fcce0f
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitc760143d74673fc1c1a1dd1269fcce0f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc760143d74673fc1c1a1dd1269fcce0f::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitc760143d74673fc1c1a1dd1269fcce0f::$classMap;

        }, null, ClassLoader::class);
    }
}
