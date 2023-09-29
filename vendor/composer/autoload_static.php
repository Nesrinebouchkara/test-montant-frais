<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd8a161bc5f6152a08b5402ad4daacc81
{
    public static $prefixLengthsPsr4 = array (
        'B' => 
        array (
            'Bouchkara\\TestMontantFrais\\' => 27,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Bouchkara\\TestMontantFrais\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitd8a161bc5f6152a08b5402ad4daacc81::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd8a161bc5f6152a08b5402ad4daacc81::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitd8a161bc5f6152a08b5402ad4daacc81::$classMap;

        }, null, ClassLoader::class);
    }
}
