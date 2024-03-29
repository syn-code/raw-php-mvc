<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit7c0d4d2336c0e3ac9ae16a8b8400a995
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'MVC\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'MVC\\' => 
        array (
            0 => __DIR__ . '/../..' . '/mvc',
        ),
    );

    public static $classMap = array (
        'MVC\\Classes\\Routing\\Route' => __DIR__ . '/../..' . '/mvc/classes/Routing/Route.php',
        'MVC\\Controllers\\AboutController' => __DIR__ . '/../..' . '/mvc/Controllers/AboutController.php',
        'MVC\\Controllers\\Controller' => __DIR__ . '/../..' . '/mvc/Controllers/Controller.php',
        'MVC\\Request\\Request' => __DIR__ . '/../..' . '/mvc/classes/Request.php',
        'MVC\\View\\View' => __DIR__ . '/../..' . '/mvc/classes/View.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit7c0d4d2336c0e3ac9ae16a8b8400a995::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit7c0d4d2336c0e3ac9ae16a8b8400a995::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit7c0d4d2336c0e3ac9ae16a8b8400a995::$classMap;

        }, null, ClassLoader::class);
    }
}
