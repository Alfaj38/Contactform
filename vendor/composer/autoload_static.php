<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitacba8bb63cf006108f6eb5631019d080
{
    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Tests\\' => 6,
        ),
        'A' => 
        array (
            'Alfaj\\Contactform\\' => 18,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Tests\\' => 
        array (
            0 => __DIR__ . '/../..' . '/tests',
        ),
        'Alfaj\\Contactform\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
            1 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitacba8bb63cf006108f6eb5631019d080::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitacba8bb63cf006108f6eb5631019d080::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
