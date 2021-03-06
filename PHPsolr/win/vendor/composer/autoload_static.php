<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit0b9653fcd9090d910827dabee79c1ff2
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Symfony\\Component\\EventDispatcher\\' => 34,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Symfony\\Component\\EventDispatcher\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/event-dispatcher',
        ),
    );

    public static $prefixesPsr0 = array (
        'S' => 
        array (
            'Solarium\\' => 
            array (
                0 => __DIR__ . '/..' . '/solarium/solarium/library',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit0b9653fcd9090d910827dabee79c1ff2::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit0b9653fcd9090d910827dabee79c1ff2::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit0b9653fcd9090d910827dabee79c1ff2::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
