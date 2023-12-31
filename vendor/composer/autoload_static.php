<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitbae380965bc5f7340e6c70af648a86e8
{
    public static $prefixLengthsPsr4 = array (
        'J' => 
        array (
            'Jpaulmn\\PhpGenerate\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Jpaulmn\\PhpGenerate\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitbae380965bc5f7340e6c70af648a86e8::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitbae380965bc5f7340e6c70af648a86e8::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitbae380965bc5f7340e6c70af648a86e8::$classMap;

        }, null, ClassLoader::class);
    }
}
