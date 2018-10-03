<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit6ce9fa4f9b4211d06c7a9c85ca1aa626
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit6ce9fa4f9b4211d06c7a9c85ca1aa626::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit6ce9fa4f9b4211d06c7a9c85ca1aa626::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
