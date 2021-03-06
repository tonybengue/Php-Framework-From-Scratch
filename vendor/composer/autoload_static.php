<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitccc65348a116dc32dd95d0b24c635eeb
{
    public static $prefixLengthsPsr4 = array (
        'f' => 
        array (
            'f3il\\' => 5,
        ),
        'a' => 
        array (
            'app\\' => 4,
        ),
        'P' => 
        array (
            'Psr\\Log\\' => 8,
        ),
        'M' => 
        array (
            'Monolog\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'f3il\\' => 
        array (
            0 => __DIR__ . '/../..' . '/f3il',
        ),
        'app\\' => 
        array (
            0 => __DIR__ . '/../..' . '/application',
        ),
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/Psr/Log',
        ),
        'Monolog\\' => 
        array (
            0 => __DIR__ . '/..' . '/monolog/monolog/src/Monolog',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitccc65348a116dc32dd95d0b24c635eeb::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitccc65348a116dc32dd95d0b24c635eeb::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
