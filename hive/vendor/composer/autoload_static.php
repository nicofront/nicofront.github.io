<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitac9f9c003873e27a2a547ed008fe6661
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitac9f9c003873e27a2a547ed008fe6661::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitac9f9c003873e27a2a547ed008fe6661::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
