<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitaaf7fd592f031531fea66eb6adbf4ff3
{
    public static $prefixLengthsPsr4 = array (
        'a' => 
        array (
            'amirsanni\\paystacklib\\' => 22,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'amirsanni\\paystacklib\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitaaf7fd592f031531fea66eb6adbf4ff3::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitaaf7fd592f031531fea66eb6adbf4ff3::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}