<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit26858d2355338abae395748441056393
{
    public static $files = array (
        '3b5531f8bb4716e1b6014ad7e734f545' => __DIR__ . '/..' . '/illuminate/support/Illuminate/Support/helpers.php',
        '253c157292f75eb38082b5acb06f3f01' => __DIR__ . '/..' . '/nikic/fast-route/src/functions.php',
        '2c102faa651ef8ea5874edb585946bce' => __DIR__ . '/..' . '/swiftmailer/swiftmailer/lib/swift_required.php',
    );

    public static $prefixLengthsPsr4 = array (
        'R' => 
        array (
            'Resume\\' => 7,
        ),
        'P' => 
        array (
            'Philo\\Blade\\' => 12,
        ),
        'F' => 
        array (
            'FastRoute\\' => 10,
        ),
        'E' => 
        array (
            'Egulias\\EmailValidator\\' => 23,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Resume\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'Philo\\Blade\\' => 
        array (
            0 => __DIR__ . '/..' . '/philo/laravel-blade/src',
        ),
        'FastRoute\\' => 
        array (
            0 => __DIR__ . '/..' . '/nikic/fast-route/src',
        ),
        'Egulias\\EmailValidator\\' => 
        array (
            0 => __DIR__ . '/..' . '/egulias/email-validator/EmailValidator',
        ),
    );

    public static $prefixesPsr0 = array (
        'S' => 
        array (
            'Symfony\\Component\\Finder\\' => 
            array (
                0 => __DIR__ . '/..' . '/symfony/finder',
            ),
        ),
        'I' => 
        array (
            'Illuminate\\View' => 
            array (
                0 => __DIR__ . '/..' . '/illuminate/view',
            ),
            'Illuminate\\Support' => 
            array (
                0 => __DIR__ . '/..' . '/illuminate/support',
            ),
            'Illuminate\\Filesystem' => 
            array (
                0 => __DIR__ . '/..' . '/illuminate/filesystem',
            ),
            'Illuminate\\Events' => 
            array (
                0 => __DIR__ . '/..' . '/illuminate/events',
            ),
            'Illuminate\\Container' => 
            array (
                0 => __DIR__ . '/..' . '/illuminate/container',
            ),
        ),
        'D' => 
        array (
            'Doctrine\\Common\\Lexer\\' => 
            array (
                0 => __DIR__ . '/..' . '/doctrine/lexer/lib',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit26858d2355338abae395748441056393::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit26858d2355338abae395748441056393::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit26858d2355338abae395748441056393::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
