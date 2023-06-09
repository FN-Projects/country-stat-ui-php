<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitdd06e9fe194deb214061f85c48783fa0
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

        spl_autoload_register(array('ComposerAutoloaderInitdd06e9fe194deb214061f85c48783fa0', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitdd06e9fe194deb214061f85c48783fa0', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitdd06e9fe194deb214061f85c48783fa0::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
