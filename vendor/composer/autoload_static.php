<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitfd02c87cfcc507a2e44d11e759a041cc
{
    public static $files = array (
        '5f2aad0f1beee097fba38a252c1ebd00' => __DIR__ . '/..' . '/a7/autoload/package.php',
    );

    public static $prefixLengthsPsr4 = array (
        'O' => 
        array (
            'ODS\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'ODS\\' => 
        array (
            0 => __DIR__ . '/..' . '/oberonlai/wp-option/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitfd02c87cfcc507a2e44d11e759a041cc::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitfd02c87cfcc507a2e44d11e759a041cc::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitfd02c87cfcc507a2e44d11e759a041cc::$classMap;

        }, null, ClassLoader::class);
    }
}
