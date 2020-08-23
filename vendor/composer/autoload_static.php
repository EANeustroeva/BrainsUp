<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita0d7dc2f9d7c5cdcb5f1320109fbb3f3
{
    public static $prefixLengthsPsr4 = array (
        'f' => 
        array (
            'fw\\' => 3,
        ),
        'a' => 
        array (
            'app\\' => 4,
        ),
        'W' => 
        array (
            'Whoops\\' => 7,
        ),
        'V' => 
        array (
            'Valitron\\' => 9,
        ),
        'P' => 
        array (
            'Psr\\Log\\' => 8,
            'Phpml\\' => 6,
        ),
        'M' => 
        array (
            'Monolog\\' => 8,
            'MonkeyLearn\\' => 12,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'fw\\' => 
        array (
            0 => __DIR__ . '/..' . '/fw',
        ),
        'app\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
        'Whoops\\' => 
        array (
            0 => __DIR__ . '/..' . '/filp/whoops/src/Whoops',
        ),
        'Valitron\\' => 
        array (
            0 => __DIR__ . '/..' . '/vlucas/valitron/src/Valitron',
        ),
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/Psr/Log',
        ),
        'Phpml\\' => 
        array (
            0 => __DIR__ . '/..' . '/php-ai/php-ml/src',
        ),
        'Monolog\\' => 
        array (
            0 => __DIR__ . '/..' . '/monolog/monolog/src/Monolog',
        ),
        'MonkeyLearn\\' => 
        array (
            0 => __DIR__ . '/..' . '/monkeylearn/monkeylearn-php/src',
        ),
    );

    public static $classMap = array (
        'EasyPeasyICS' => __DIR__ . '/..' . '/phpmailer/phpmailer/extras/EasyPeasyICS.php',
        'LittleYoutube\\Channel' => __DIR__ . '/..' . '/scarletsfiction/littleyoutube/src/LittleYoutube.php',
        'LittleYoutube\\LittleYoutube' => __DIR__ . '/..' . '/scarletsfiction/littleyoutube/src/LittleYoutube.php',
        'LittleYoutube\\LittleYoutubeInfo' => __DIR__ . '/..' . '/scarletsfiction/littleyoutube/src/LittleYoutube.php',
        'LittleYoutube\\Playlist' => __DIR__ . '/..' . '/scarletsfiction/littleyoutube/src/LittleYoutube.php',
        'LittleYoutube\\Search' => __DIR__ . '/..' . '/scarletsfiction/littleyoutube/src/LittleYoutube.php',
        'LittleYoutube\\Video' => __DIR__ . '/..' . '/scarletsfiction/littleyoutube/src/LittleYoutube.php',
        'PHPMailer' => __DIR__ . '/..' . '/phpmailer/phpmailer/class.phpmailer.php',
        'PHPMailerOAuth' => __DIR__ . '/..' . '/phpmailer/phpmailer/class.phpmaileroauth.php',
        'PHPMailerOAuthGoogle' => __DIR__ . '/..' . '/phpmailer/phpmailer/class.phpmaileroauthgoogle.php',
        'POP3' => __DIR__ . '/..' . '/phpmailer/phpmailer/class.pop3.php',
        'SMTP' => __DIR__ . '/..' . '/phpmailer/phpmailer/class.smtp.php',
        'ScarletsFiction\\Extra' => __DIR__ . '/..' . '/scarletsfiction/littleyoutube/src/LittleYoutube.php',
        'ScarletsFiction\\FileApi' => __DIR__ . '/..' . '/scarletsfiction/littleyoutube/src/LittleYoutube.php',
        'ScarletsFiction\\Stream' => __DIR__ . '/..' . '/scarletsfiction/littleyoutube/src/LittleYoutube.php',
        'ScarletsFiction\\WebApi' => __DIR__ . '/..' . '/scarletsfiction/littleyoutube/src/LittleYoutube.php',
        'ntlm_sasl_client_class' => __DIR__ . '/..' . '/phpmailer/phpmailer/extras/ntlm_sasl_client.php',
        'phpmailerException' => __DIR__ . '/..' . '/phpmailer/phpmailer/class.phpmailer.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInita0d7dc2f9d7c5cdcb5f1320109fbb3f3::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita0d7dc2f9d7c5cdcb5f1320109fbb3f3::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInita0d7dc2f9d7c5cdcb5f1320109fbb3f3::$classMap;

        }, null, ClassLoader::class);
    }
}
