<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite2e4c47fe155ad15a5920e93364ced96
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

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInite2e4c47fe155ad15a5920e93364ced96::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite2e4c47fe155ad15a5920e93364ced96::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInite2e4c47fe155ad15a5920e93364ced96::$classMap;

        }, null, ClassLoader::class);
    }
}
