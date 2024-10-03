<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita98a6470bfea891bb779e38d71ce02bb
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
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInita98a6470bfea891bb779e38d71ce02bb::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita98a6470bfea891bb779e38d71ce02bb::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInita98a6470bfea891bb779e38d71ce02bb::$classMap;

        }, null, ClassLoader::class);
    }
}