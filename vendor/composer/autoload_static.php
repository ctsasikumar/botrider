<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd715dfea0a1ba509c03a2f55d5ac6079
{
    public static $prefixLengthsPsr4 = array (
        'p' => 
        array (
            'pimax\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'pimax\\' => 
        array (
            0 => __DIR__ . '/..' . '/pimax/fb-messenger-php',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitd715dfea0a1ba509c03a2f55d5ac6079::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd715dfea0a1ba509c03a2f55d5ac6079::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
