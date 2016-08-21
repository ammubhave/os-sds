<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitdf02c868ed05a5568ccfe73bdb950571
{
    public static $files = array (
        '3919eeb97e98d4648304477f8ef734ba' => __DIR__ . '/..' . '/phpseclib/phpseclib/phpseclib/Crypt/Random.php',
    );

    public static $prefixesPsr0 = array (
        'S' => 
        array (
            'System' => 
            array (
                0 => __DIR__ . '/..' . '/phpseclib/phpseclib/phpseclib',
            ),
        ),
        'N' => 
        array (
            'Net' => 
            array (
                0 => __DIR__ . '/..' . '/phpseclib/phpseclib/phpseclib',
            ),
        ),
        'M' => 
        array (
            'Math' => 
            array (
                0 => __DIR__ . '/..' . '/phpseclib/phpseclib/phpseclib',
            ),
        ),
        'F' => 
        array (
            'File' => 
            array (
                0 => __DIR__ . '/..' . '/phpseclib/phpseclib/phpseclib',
            ),
        ),
        'C' => 
        array (
            'Crypt' => 
            array (
                0 => __DIR__ . '/..' . '/phpseclib/phpseclib/phpseclib',
            ),
        ),
    );

    public static $classMap = array (
        'OpenIDConnectClient' => __DIR__ . '/..' . '/jumbojett/openid-connect-php/OpenIDConnectClient.php',
        'OpenIDConnectClientException' => __DIR__ . '/..' . '/jumbojett/openid-connect-php/OpenIDConnectClient.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInitdf02c868ed05a5568ccfe73bdb950571::$prefixesPsr0;
            $loader->classMap = ComposerStaticInitdf02c868ed05a5568ccfe73bdb950571::$classMap;

        }, null, ClassLoader::class);
    }
}
