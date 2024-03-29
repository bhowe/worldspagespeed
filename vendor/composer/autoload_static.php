<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit75d812e04ec76139780785f4bbab77cd
{
    public static $files = array (
        'a4a119a56e50fbb293281d9a48007e0e' => __DIR__ . '/..' . '/symfony/polyfill-php80/bootstrap.php',
        '6e3fae29631ef280660b3cdad06f25a8' => __DIR__ . '/..' . '/symfony/deprecation-contracts/function.php',
    );

    public static $prefixLengthsPsr4 = array (
        'Y' => 
        array (
            'Yosymfony\\Toml\\' => 15,
            'Yosymfony\\ParserUtils\\' => 22,
        ),
        'S' => 
        array (
            'Symfony\\Polyfill\\Php80\\' => 23,
            'Symfony\\Contracts\\EventDispatcher\\' => 34,
            'Symfony\\Component\\EventDispatcher\\' => 34,
        ),
        'P' => 
        array (
            'Psr\\EventDispatcher\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Yosymfony\\Toml\\' => 
        array (
            0 => __DIR__ . '/..' . '/yosymfony/toml/src',
        ),
        'Yosymfony\\ParserUtils\\' => 
        array (
            0 => __DIR__ . '/..' . '/yosymfony/parser-utils/src',
        ),
        'Symfony\\Polyfill\\Php80\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-php80',
        ),
        'Symfony\\Contracts\\EventDispatcher\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/event-dispatcher-contracts',
        ),
        'Symfony\\Component\\EventDispatcher\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/event-dispatcher',
        ),
        'Psr\\EventDispatcher\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/event-dispatcher/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'P' => 
        array (
            'PageSpeed\\Tests' => 
            array (
                0 => __DIR__ . '/..' . '/sgrodzicki/pagespeed/tests',
            ),
            'PageSpeed' => 
            array (
                0 => __DIR__ . '/..' . '/sgrodzicki/pagespeed/src',
            ),
        ),
        'G' => 
        array (
            'Guzzle\\Tests' => 
            array (
                0 => __DIR__ . '/..' . '/guzzlehttp/guzzle/tests',
            ),
            'Guzzle' => 
            array (
                0 => __DIR__ . '/..' . '/guzzlehttp/guzzle/src',
            ),
        ),
    );

    public static $classMap = array (
        'Attribute' => __DIR__ . '/..' . '/symfony/polyfill-php80/Resources/stubs/Attribute.php',
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'PhpToken' => __DIR__ . '/..' . '/symfony/polyfill-php80/Resources/stubs/PhpToken.php',
        'Stringable' => __DIR__ . '/..' . '/symfony/polyfill-php80/Resources/stubs/Stringable.php',
        'UnhandledMatchError' => __DIR__ . '/..' . '/symfony/polyfill-php80/Resources/stubs/UnhandledMatchError.php',
        'ValueError' => __DIR__ . '/..' . '/symfony/polyfill-php80/Resources/stubs/ValueError.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit75d812e04ec76139780785f4bbab77cd::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit75d812e04ec76139780785f4bbab77cd::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit75d812e04ec76139780785f4bbab77cd::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit75d812e04ec76139780785f4bbab77cd::$classMap;

        }, null, ClassLoader::class);
    }
}
