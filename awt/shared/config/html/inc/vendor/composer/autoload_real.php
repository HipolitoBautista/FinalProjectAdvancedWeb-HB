<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitbf92455026d3087e7078fbc10ec23bac
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        spl_autoload_register(array('ComposerAutoloaderInitbf92455026d3087e7078fbc10ec23bac', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitbf92455026d3087e7078fbc10ec23bac', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitbf92455026d3087e7078fbc10ec23bac::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}