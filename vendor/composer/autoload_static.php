<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc4aec1b2efe41c874cbed5d25b366d17
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

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitc4aec1b2efe41c874cbed5d25b366d17::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc4aec1b2efe41c874cbed5d25b366d17::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
