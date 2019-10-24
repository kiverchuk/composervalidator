<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd08356ac857ebb4c082dd33217489e3d
{
    public static $prefixLengthsPsr4 = array (
        'V' => 
        array (
            'Valitron\\' => 9,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Valitron\\' => 
        array (
            0 => __DIR__ . '/..' . '/vlucas/valitron/src/Valitron',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitd08356ac857ebb4c082dd33217489e3d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd08356ac857ebb4c082dd33217489e3d::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
