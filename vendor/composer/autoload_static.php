<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit2692e6ebcf7732397461d8ddb6868624
{
    public static $prefixLengthsPsr4 = array (
        'k' => 
        array (
            'kartik\\plugins\\fileinput\\' => 25,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'kartik\\plugins\\fileinput\\' => 
        array (
            0 => __DIR__ . '/../..' . '/',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit2692e6ebcf7732397461d8ddb6868624::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit2692e6ebcf7732397461d8ddb6868624::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit2692e6ebcf7732397461d8ddb6868624::$classMap;

        }, null, ClassLoader::class);
    }
}
