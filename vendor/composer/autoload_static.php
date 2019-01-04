<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd79e25a9996cce7124ae8eb252f16b1c
{
    public static $prefixLengthsPsr4 = array (
        'W' => 
        array (
            'Wapschool\\' => 10,
        ),
        'P' => 
        array (
            'PhpAmqpLib\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Wapschool\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/wapschool',
        ),
        'PhpAmqpLib\\' => 
        array (
            0 => __DIR__ . '/..' . '/php-amqplib/php-amqplib/PhpAmqpLib',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitd79e25a9996cce7124ae8eb252f16b1c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd79e25a9996cce7124ae8eb252f16b1c::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
