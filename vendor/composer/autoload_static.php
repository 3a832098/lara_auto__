<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit25173b4a0e46108a5109d5df4c410d10
{
    public static $prefixLengthsPsr4 = array (
        'D' => 
        array (
            'Demo\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Demo\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/Demo',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit25173b4a0e46108a5109d5df4c410d10::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit25173b4a0e46108a5109d5df4c410d10::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
