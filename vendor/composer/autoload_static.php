<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit55c393a61b62ce863c2478580f7c88e4
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'CowSay\\Traits\\' => 14,
            'CowSay\\Core\\' => 12,
            'CowSay\\' => 7,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'CowSay\\Traits\\' => 
        array (
            0 => __DIR__ . '/..' . '/gipetto/cowsay/src/Traits',
        ),
        'CowSay\\Core\\' => 
        array (
            0 => __DIR__ . '/..' . '/gipetto/cowsay/src/Core',
        ),
        'CowSay\\' => 
        array (
            0 => __DIR__ . '/..' . '/gipetto/cowsay/src/Carcases',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit55c393a61b62ce863c2478580f7c88e4::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit55c393a61b62ce863c2478580f7c88e4::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit55c393a61b62ce863c2478580f7c88e4::$classMap;

        }, null, ClassLoader::class);
    }
}