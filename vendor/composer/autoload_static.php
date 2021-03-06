<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticIniteb807acd1adfe650f23b3bd912ab398d
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Swagger\\Client\\' => 15,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Swagger\\Client\\' => 
        array (
            0 => __DIR__ . '/..' . '/shoutoutlabs/shoutout-sdk/lib',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticIniteb807acd1adfe650f23b3bd912ab398d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticIniteb807acd1adfe650f23b3bd912ab398d::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
