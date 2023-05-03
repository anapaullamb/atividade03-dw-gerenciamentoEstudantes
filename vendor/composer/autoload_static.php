<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit215a4ec1174cb440a679b6fada688d76
{
    public static $prefixLengthsPsr4 = array (
        'a' => 
        array (
            'app\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'app\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'app\\controllers\\StudentController' => __DIR__ . '/../..' . '/app/controllers/StudentController.php',
        'app\\database\\Connection' => __DIR__ . '/../..' . '/app/database/Connection.php',
        'app\\database\\models\\Model' => __DIR__ . '/../..' . '/app/database/models/Model.php',
        'app\\database\\models\\Student' => __DIR__ . '/../..' . '/app/database/models/Student.php',
        'app\\traits\\Connection' => __DIR__ . '/../..' . '/app/traits/Connection.php',
        'app\\traits\\Read' => __DIR__ . '/../..' . '/app/traits/Read.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit215a4ec1174cb440a679b6fada688d76::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit215a4ec1174cb440a679b6fada688d76::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit215a4ec1174cb440a679b6fada688d76::$classMap;

        }, null, ClassLoader::class);
    }
}
