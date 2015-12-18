<?php

// autoload_real.php @generated by Composer

<<<<<<< HEAD
class ComposerAutoloaderInit5ae3f7359d7c0b95e4dbcd4436a649ce
=======
class ComposerAutoloaderInit9afe7334c05b95b41f267366f14db2a8
>>>>>>> 2984a17cc10db6830de7319410f03caa118e446f
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

<<<<<<< HEAD
        spl_autoload_register(array('ComposerAutoloaderInit5ae3f7359d7c0b95e4dbcd4436a649ce', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader();
        spl_autoload_unregister(array('ComposerAutoloaderInit5ae3f7359d7c0b95e4dbcd4436a649ce', 'loadClassLoader'));
=======
        spl_autoload_register(array('ComposerAutoloaderInit9afe7334c05b95b41f267366f14db2a8', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader();
        spl_autoload_unregister(array('ComposerAutoloaderInit9afe7334c05b95b41f267366f14db2a8', 'loadClassLoader'));
>>>>>>> 2984a17cc10db6830de7319410f03caa118e446f

        $map = require __DIR__ . '/autoload_namespaces.php';
        foreach ($map as $namespace => $path) {
            $loader->set($namespace, $path);
        }

        $map = require __DIR__ . '/autoload_psr4.php';
        foreach ($map as $namespace => $path) {
            $loader->setPsr4($namespace, $path);
        }

        $classMap = require __DIR__ . '/autoload_classmap.php';
        if ($classMap) {
            $loader->addClassMap($classMap);
        }

        $loader->register(true);

        return $loader;
    }
}
